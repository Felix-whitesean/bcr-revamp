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
@endphp

<div class="block dynamicTagComponent" data-id="{{ $id }}">
    <div id="headingContainer" class="headingContainer prose z-[11]">
        <{{ $selectedHeadingTag}} class="dynamicTag flex">
            <span contenteditable="true" onblur="updateTitleContent(this)">{{$headingText}}</span>
            <div class="self-center relative">
                <span><i class="fi fi-rr-caret-down" onclick="toggleFunction(this)"></i></span>
                <div class="bg-gray-300 btnList flex flex-col gap-2 absolute right-0">
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
        <p id="editableContent" class="content text-[18px]" contenteditable="true" 
            onkeydown="handleEnter(event)" onblur="updateContent(this, {{ $id }})" data-id="{{ $id }}">
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
        console.log(toggledList)
        if (toggledList.style.display === "none") {
            toggledList.style.display = "block"; // Show list
            element.classList.replace('fi-rr-caret-down', 'fi-rr-caret-up'); // Change icon
        } else {
            toggledList.style.display = "none"; // Hide list
            element.classList.replace('fi-rr-caret-up', 'fi-rr-caret-down'); // Change icon
        }
    }

    function changeTag(tag, componentId) {
        fetch("{{ route('tag.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: componentId, title_tag: tag })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let component = document.querySelector(`[data-id='${componentId}']`);
                switchTag(tag, component);
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
    }

    function handleEnter(event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Prevent default new paragraph behavior
            document.execCommand("insertLineBreak"); // Inserts an actual <br> without showing text
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
            body: JSON.stringify({ id: id, content: content })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Content updated successfully!");
                // var main = document.querySelector('.main');
                // location.reload(); // Ensures session toast appears
                toast('warning', 'Content update', 'Content updated successfully', 5000)
            }
        })
        .catch(error => console.error("Error:", error));
    }
    function toast(toast_type, toast_title, toast_message, timeout){
        var successBtn = toaster.querySelector (".success");
        var errorBtn = toaster.querySelector (".error");
        var warningBtn = toaster.querySelector (".warning");

        successBtn.style.display="none";
        errorBtn.style.display="none";
        warningBtn.style.display="none";

        if(toast_type == 'success'){
            toaster.style.background = "var(--success-color)";
            successBtn.style.display = "flex";
        }
        else if(toast_type == 'error'){
            toaster.style.background = "var(--error-color)";
            errorBtn.style.display = "flex";
        }
        else if(toast_type == 'warning'){
            toaster.style.background = "var(--warning-color)";
            warningBtn.style.display = "flex";
        }
        else{
            toaster.style.background = "black";
        }

        var toastTitle = toaster.querySelector('h4');
        toastTitle.textContent = toast_title;
        var toastContent = toaster.querySelector('p');
        toastContent.textContent = toast_message;

        toaster.style.display = "flex";
        setTimeout(function () {
            toaster.style.display = "none";
        }, timeout);
    }
    function updateTitleContent(element, id) {
        let title_content = element.innerHTML;

        fetch("{{ route('title.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: id, title: title_content })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Title updated successfully!");
                console.log(document.querySelector('.main'))
                // location.reload(); // Ensures session toast appears
            }
        })
        .catch(error => console.error("Error:", error));
    }
</script>