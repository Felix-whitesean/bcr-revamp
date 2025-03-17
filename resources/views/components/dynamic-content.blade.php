@php
    $selectedHeadingTag = $title_tag ?? 'h1';
    $contentText = $content ?? 'This is a hero of the page. The content of this page.';
    $headingText = $title_content ?? '';
@endphp

<div id="dynamicTagComponent" class="block" data-id="{{ $id }}">
    <div id="headingContainer" class="prose z-[11]">
        <{{ $selectedHeadingTag }} class="dynamicTag flex ">
            <span contenteditable="true" onblur="updateTitleContent(this)">{{$headingText}}</span>
            <div class="self-center relative">
                <span><i class="fi fi-rr-caret-down"></i></span>
                <div class="bg-gray-300 btnList flex flex-col gap-2 absolute right-0">
                    <button onclick="changeTag('h1')">H1</button>
                    <button onclick="changeTag('h2')">H2</button>
                    <button onclick="changeTag('h3')">H3</button>
                    <button onclick="changeTag('h4')">H4</button>
                    <button onclick="changeTag('h5')">H5</button>
                    <button onclick="changeTag('h6')">H6</button>
                </div>
            </div>
        </{{ $selectedHeadingTag }}>
    </div>
    <div>
        <p id="editableContent" class="content text-[18px]" contenteditable="true" 
            onkeydown="handleEnter(event)" onblur="updateContent(this)" data-id="{{ $id }}">
            {!! $contentText !!}
        </p>
    </div>
</div>

<script>
    var headingContainer = document.getElementById('headingContainer');
    var toggleBtn = headingContainer.querySelector('i');
    var toggledList = headingContainer.querySelector('.btnList');
    let component = document.getElementById("dynamicTagComponent");
    let id = component.getAttribute("data-id");

    toggledList.style.visibility = "hidden";
    toggleBtn.addEventListener("click", function(){
        toggleFunction(this);
    });
    function toggleFunction(element) {
        if (element.classList.contains('fi-rr-caret-up')) {
            element.classList.replace('fi-rr-caret-up', 'fi-rr-caret-down');
            toggledList.style.visibility = "hidden";
        } else {
            element.classList.replace('fi-rr-caret-down', 'fi-rr-caret-up');
            toggledList.style.visibility = "visible";
        }
    }
    function changeTag(tag) {
        fetch("{{ route('tag.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: id, title_tag: tag })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                switchTag(tag)
            }
        })
        .catch(error => console.error('Error:', error));
    }
    function switchTag(newTag) {
        console.log(newTag)

        let oldElement = document.querySelector(".dynamicTag"); // Select the current element
        if (!oldElement) return;

        let newElement = document.createElement(newTag); // Create new tag
        newElement.className = oldElement.className; // Copy class attributes

        // Move all children to the new element
        while (oldElement.firstChild) {
            newElement.appendChild(oldElement.firstChild);
        }

        // Replace the old element with the new one
        oldElement.parentNode.replaceChild(newElement, oldElement);
    }
    function handleEnter(event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Prevent default new paragraph behavior
            document.execCommand("insertLineBreak"); // Inserts an actual <br> without showing text
        }
    }

    function updateContent(element) {
        let content = element.innerHTML; // Preserve <br> tags without making them visible
        // let tag = element.tagName.toLowerCase();
        // let id = element.getAttribute("data-id");

        fetch("{{ route('content.update') }}", {
            method: "POST",
            headers: {
                "Accept": "application/json",
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: id, content: content })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(`Content with ID ${id} updated successfully!`);
            } else {
                console.log("Update failed:", data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
    function updateTitleContent(element) {
        let title_content = element.innerHTML; // Preserve <br> tags without making them visible
        // let tag = element.tagName.toLowerCase();
        // let id = element.getAttribute("data-id");

        fetch("{{ route('title.update') }}", {
            method: "POST",
            headers: {
                "Accept": "application/json",
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ id: id, title: title_content })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(`Content with ID ${id} updated successfully!`);
            } else {
                console.log("Update failed:", data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>