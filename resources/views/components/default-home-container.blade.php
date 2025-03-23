<div class="w-[98vw] m-auto z-[111]">
    <div class="title flex lg:flex-row sm:flex-col gap-4 justify-between text-black bg-[var(--white-4)] lg:px-4 sm:px-2 rounded-md">
        <div class="company flex gap-4">
            <img class="logo w-[60px] h-60px self-center" src="{{ asset('images/f1.png') }}" alt="">
            <div class="name lg:w-[309px] sm:w-max leading-[30px] text-[24px] text-[var(--secondary-color)]">Biochar climate resolution</div>
        </div>
        <button class="flex self-end gap-[1rem] sm:gap-16 py-2 px-8 leading-[20px] justify-between bg-[#8BDA8B] mr-8">
            <i class="fi-rs-user self-center rounded-[50%] border-2 border-black bg-white px-2 py-[10px] pt-[7px]"></i>
            <span class="font-bold self-center font-['Istok_Web_Bold'] tracking-[.6px] font-[18px] rounded-md m-auto">Join us</span>
        </button>
    </div>
    <div class="hero">
        <livewire:dynamic-content />
    </div>
</div>