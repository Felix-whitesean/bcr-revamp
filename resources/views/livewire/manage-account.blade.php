@php
    $isLoggedIn = $username ?? '';
@endphp
<div class="parent z-[111] flex gap-2 rounded-sm relative">
    <span class="toggleButton self-center p-2 flex">
        <h4 class="relative rounded-[50%] bg-[var(--primary-color-per)] text-center px-2 py-1 border-2 border-[var(--test)]">{{ $isLoggedIn ? strtoupper(substr($username, 0, 1)) : "<i class='fi fi-rs-user-check text-[20px] pl-2 pr-1 py-1 pb-0 border-[2px] border-black'></i>" }}<span class="w-2 h-2 rounded-md bg-blue-900 absolute right-0 -top-0"></span></h4>
        <i class="fi fi-rr-caret-down hover:cursor-pointer ml-[-2px] transition-transform self-end" id="caret"></i>
    </span>
    <button class="px-4 py-2 border-[2px] border-black hover:bg-[var(--primary-color)] self-center rounded-md flex"><i class="fi fi-rr-globe mr-4 self-center"></i><span class="self-center">Community</span></button>
    <div class="manage absolute left-0 top-[110%] bg-red-400 w-fit max-w-[250px] overflow-hidden text-ellipsis h-fit rounded-sm shadow-[2px_2px_6px_rgb(0,0,0,.2)] text-center max-w-[80%] hover:opacity-[.97] bg-white">
        <div class="bg-[var(--primary-color)]">
            <h4 class="hover:cursor-pointer py-2 px-4 relative flex gap-4 w-max mx-auto relative">
                <span class="truncate block max-w-[180px]">{{$username}}</span>
                <div class="relative flex">
                    <x-uiw-mail class="self-center text-black h-[18px]"/>
                    <span class="w-2 h-2 rounded-2xl bg-blue-800 self-start"></span>
                </div>
            </h4>
        </div>
        <hr>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-red-500 p-2 hover:cursor-pointer hover:text-red-600 w-fit flex m-auto"><i class="fi fi-rr-sign-out-alt mr-2"></i><h5>Log out</h5></button>
        </form>
        <a href="logout"></a>
    </div>
</div>
<script>
    var manage = document.querySelector('.manage');
    var toggleButton = document.querySelector('.toggleButton');
    var parent = document.querySelector('.parent');
    manage.style.visibility = "hidden";
    function listener() {
        toggleButton.addEventListener("click", function() { 
            manageToggleFunction(this); 
        });
        
    }

    function manageToggleFunction(element) {
    
        if (element.querySelector('i').classList.contains('fi-rr-caret-up')) {
            element.querySelector('i').classList.replace('fi-rr-caret-up', 'fi-rr-caret-down');
            manage.style.visibility = "hidden";
        } else {
            element.querySelector('i').classList.replace('fi-rr-caret-down', 'fi-rr-caret-up');
            manage.style.visibility = "visible";
        }
    }

    // Ensure the script runs only after the DOM is fully loaded
    document.addEventListener("DOMContentLoaded", listener);

</script>