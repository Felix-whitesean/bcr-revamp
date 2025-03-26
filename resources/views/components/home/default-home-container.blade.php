<div class="w-[98vw] m-auto z-[111]">
    <div class="title flex lg:flex-row sm:flex-col gap-4 justify-between text-black bg-[var(--white-4)] lg:px-4 sm:px-2 rounded-md">
        <div class="company flex gap-4">
            <img class="logo w-[60px] h-60px self-center" src="{{ asset('images/f1.png') }}" alt="">
            <div class="name lg:w-[309px] sm:w-max leading-[30px] text-[24px] text-[var(--secondary-color)]">Biochar climate resolution</div>
        </div>
        <button class="flex self-center gap-[1rem] sm:gap-16 py-2 rounded-md border-[2px] border-green-400 px-4 leading-[20px] justify-between bg-[#8BDA8B] mr-8">
            <i class="fi fi-brands-microsoft-explorer"></i>
            <span class="font-bold self-center italic tracking-[.6px] font-[18px] font-[Inknut_Antiqua] rounded-md m-auto">Explore</span>
        </button>
    </div>
    <div class="hero">
        <livewire:home.dynamic-content />
    </div>
</div>