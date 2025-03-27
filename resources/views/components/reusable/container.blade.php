@php
    $selectedHeadingTag = $title_tag ?? 'h1';
    if($selectedHeadingTag == ''){
        $selectedHeadingTag = 'h1';
    }
    $contentText = $content ?? 'Change content';
    $headingText = $title_content ?? 'Edit title';
    $currentId = $id;
    if($headingText == '' && $contentText == '' ){
        echo "No component of id "+$id;
    }
    else if($headingText == '' && !$contentText == ''){
        $headingText = 'Change heading';
    }
    else if(!$headingText == '' && $contentText == ''){
        $contentText = 'Change content';
    }
    $isEditable = $priority== 2;
@endphp

<div class="block dynamicTagComponent" data-id="{{ $id }}">
    <div id="headingContainer" class="headingContainer prose z-[11]">
        <{{ $selectedHeadingTag}} class="dynamicTag flex">
            <span onblur='{{ $canEdit ? "updateTitleContent(this, $id )" : ""}}' contenteditable="{{ $canEdit ? 'true':'false'}}">{{$headingText}}</span>
            <div class="self-center relative {{ $canEdit ? :'hidden'}}">
                <span><i class="fi fi-rr-caret-down" onclick="toggleFunction(this)"></i></span>
                <div class="bg-gray-300 btnList flex flex-col gap-2 absolute right-0 hidden">
                    <button onclick='changeTag("h1", "{{ $id }}")'>H1</button>
                    <button onclick='changeTag("h2", "{{ $id }}")'>H2</button>
                    <button onclick='changeTag("h3", "{{ $id }}")'>H3</button>
                    <button onclick='changeTag("h4", "{{ $id }}")'>H4</button>
                    <button onclick='changeTag("h5", "{{ $id }}")'>H5</button>
                    <button onclick='changeTag("h6", "{{ $id }}")'>H6</button>

                </div>
            </div>
        </{{ $selectedHeadingTag}}>
    </div>
    <div>
        <p id="editableContent" class="content text-[18px]" onblur='{{ $canEdit ? "updateContent(this, $id)" : ""}}' contenteditable="{{ $canEdit ? 'true':'false'}}"
            onkeydown="handleEnter(event)" data-id="{{ $id }}">
            {!! $contentText !!}
        </p>
    </div>
</div>

<script>
    var main = document.querySelector('.main');
    var toaster = main.querySelector('.toast');
    document.querySelectorAll('.dynamicTagComponent').forEach(component => {
        let toggleBtn = component.querySelector('i');
        let id = component.getAttribute("data-id");
        let toggledList = component.querySelector('.btnList'); 

        // Ensure initial state is hidden
        toggledList.style.display = "none";

    });

    function toggleFunction(element) {
        let toggledList = element.parentElement.parentElement.querySelector('div'); 
        if (toggledList.style.display === "none") {
            toggledList.style.display = "block";
            element.classList.replace('fi-rr-caret-down', 'fi-rr-caret-up');
        } else {
            toggledList.style.display = "none";
            element.classList.replace('fi-rr-caret-up', 'fi-rr-caret-down');
        }
    }

    function changeTag(tag, componentId) {
        fetch("{{ route('tag.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: componentId, title_tag: tag})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let component = document.querySelector(`[data-id='${componentId}']`);
                switchTag(tag, component);
                toast('success', 'Head tag', 'Switched to: '+tag, 5000);
            }
        })
        .catch(error => console.error('Error:', error));
    }

    function switchTag(newTag, component) {
        let oldElement = component.querySelector(".dynamicTag"); 
        if (!oldElement) return;

        let newElement = document.createElement(newTag);
        newElement.className = oldElement.className;

        while (oldElement.firstChild) {
            newElement.appendChild(oldElement.firstChild);
        }

        oldElement.parentNode.replaceChild(newElement, oldElement);
        if(newTag == 'h1'){
            toast('warning', 'Title update', 'Heading is large, consider reducing', 5000);
        }
    }

    function handleEnter(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.execCommand("insertLineBreak");
        }
    }

    function updateContent(element, id) {
        let content = element.innerHTML;

        fetch("{{ route('content.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: id, content: content})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Content updated successfully!");
                toast('success', 'Content update', 'Content updated successfully', 5000);
            }
            else{
                toast('error', 'Content update', 'Content updated failed', 5000);
            }
        })
        .catch(error => console.error("Error:", error));
    }
    function updateTitleContent(element, id) {
        let title_content = element.innerHTML;

        fetch("{{ route('title.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: id, title: title_content, last_updated_by: userId})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Title updated successfully!");
                toast('success', 'Title update', 'Title updated successfully', 5000);
            }
            else{
                toast('error', 'Title update', 'Title update failed', 5000);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            toast('error', 'Title update', 'Title update failed', 5000);
        });
    }
    function toast(toast_type, toast_title, toast_message, timeout) {
        // Ensure there's a container to hold multiple toasts
        var toastContainer = document.getElementById("toastContainer");
        if (!toastContainer) {
            toastContainer = document.createElement("div");
            toastContainer.id = "toastContainer";
            toastContainer.style.position = "fixed";
            toastContainer.style.bottom = "20px";
            toastContainer.style.right = "20px";
            toastContainer.style.display = "flex";
            toastContainer.style.flexDirection = "column";
            toastContainer.style.gap = "10px";
            toastContainer.style.zIndex = "1000";
            document.body.appendChild(toastContainer);
        }

        // Create a new toast element
        var newToast = document.createElement("div");
        newToast.style.display = "flex";
        newToast.style.alignItems = "center";
        newToast.style.justifyContent = "space-between";
        newToast.style.minWidth = "250px";
        newToast.style.padding = "10px";
        newToast.style.borderRadius = "5px";
        newToast.style.boxShadow = "0 2px 5px rgba(0,0,0,0.2)";
        newToast.style.color = "white";
        newToast.style.fontFamily = "Arial, sans-serif";
        newToast.style.position = "relative";
        newToast.style.animation = "fadeIn 0.3s ease-in-out";

        // Set toast background based on type
        if (toast_type == 'success') {
            newToast.style.background = "var(--success-color, green)";
        } else if (toast_type == 'error') {
            newToast.style.background = "var(--error-color, red)";
        } else if (toast_type == 'warning') {
            newToast.style.background = "var(--warning-color, orange)";
        } else {
            newToast.style.background = "black";
        }

        // Create title and message elements
        var toastContent = document.createElement("div");
        var toastTitle = document.createElement("h4");
        toastTitle.style.margin = "0";
        toastTitle.style.fontSize = "16px";
        toastTitle.textContent = toast_title;

        var toastMessage = document.createElement("p");
        toastMessage.style.margin = "5px 0 0";
        toastMessage.style.fontSize = "14px";
        toastMessage.textContent = toast_message;

        toastContent.appendChild(toastTitle);
        toastContent.appendChild(toastMessage);

        // Create close button
        var closeToast = document.createElement("button");
        closeToast.textContent = "✖";
        closeToast.style.border = "none";
        closeToast.style.background = "transparent";
        closeToast.style.color = "white";
        closeToast.style.cursor = "pointer";
        closeToast.style.fontSize = "16px";
        closeToast.style.marginLeft = "10px";

        closeToast.addEventListener('click', function () {
            newToast.style.animation = "fadeOut 0.3s ease-in-out";
            setTimeout(() => newToast.remove(), 300);
        });

        // Append elements
        newToast.appendChild(toastContent);
        newToast.appendChild(closeToast);
        toastContainer.appendChild(newToast);

        // Remove toast after timeout
        setTimeout(function () {
            newToast.style.animation = "fadeOut 0.3s ease-in-out";
            setTimeout(() => newToast.remove(), 300);
        }, timeout);
    }

    // Add CSS animations
    const style = document.createElement("style");
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeOut {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(10px); }
        }
    `;
    document.head.appendChild(style);

</script>