
<div id="toast"
    class="toast absolute right-4 top-4 w-[300px] px-4 pt-2 pb-4 h-fit z-[1111] overflow-y-auto 
    transition-opacity duration-300 ease-in-out opacity-100">
    <x-hugeicons-tick-01 class="text-[18px] text-white self-center" />
    <x-lucide-x class="h-[18px] text-white self-center"/>
    <x-uni-exclamation-triangle class="h-[18px] text-white self-center"/>
    <div class="flex justify-between items-center">
        <h4 class="text-white font-bold"></h4>
        <button id="closeToast" class="text-white text-xl">&times;</button>
    </div>

    <p class="text-white mt-2">{{ session('toast_message') }}</p>
</div>
