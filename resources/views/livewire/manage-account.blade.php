
<div class="z-[111] flex gap-2 rounded-sm relative">
    <span class="self-center p-2">
        <i class="fi fi-rs-user-check rounded-[50%] text-[24px] px-2 py-1 pb-0 border-[2px] border-black bg-[var(--white-grey)] text-center"></i>
        <i class="fi fi-rr-caret-down toggleBtn hover:cursor-pointer" id="caret"></i>
    </span>
    <button class="px-4 py-2 border-[2px] border-black hover:bg-[var(--primary-color)] self-center rounded-md flex"><i class="fi fi-rr-globe mr-4 self-center"></i><span class="self-center">Join community</span></button>
    <div class="manage absolute left-0 top-[110%] bg-white w-full h-fit rounded-sm shadow-[2px_2px_6px_rgb(0,0,0,.2)] text-center max-w-[80%]">
        <div class="bg-[var(--primary-color)] "><h4 class="hover:cursor-pointer p-2 relative flex gap-4 w-fit mx-auto"><i class="fi fi-ss-badge-check self-center text-[var(--secondary-color)]"></i> <span>John Kiarie</span></h4></div>
        <hr>
        <h5 class="p-2 hover:cursor-pointer">Manage account</h5>
        <hr>
        <h5 class="text-red-500 p-2 hover:cursor-pointer">Log out</h5>
    </div>
</div>
<script>
    var manage = document.querySelector('.manage');
    var toggleBtn = document.querySelector('.toggleBtn');
    manage.style.visibility = "hidden";
    function listener() {
        toggleBtn.addEventListener("click", function() { 
            toggleFunction(this); 
        });
    }

    function toggleFunction(element) {
        if (element.classList.contains('fi-rr-caret-up')) {
            element.classList.replace('fi-rr-caret-up', 'fi-rr-caret-down');
            manage.style.visibility = "hidden";
        } else {
            element.classList.replace('fi-rr-caret-down', 'fi-rr-caret-up');
            manage.style.visibility = "visible";
        }
    }

    // Ensure the script runs only after the DOM is fully loaded
    document.addEventListener("DOMContentLoaded", listener);

</script>