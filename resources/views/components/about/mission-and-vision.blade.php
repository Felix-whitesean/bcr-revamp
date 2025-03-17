<div class="about flex lg:gap-32 mt-4 text-[18px] p-16">
    <div class="left z-[11]">
        {!! $content !!}
    </div>
    <div class="right z-[11]">
        <div class="cont w-[210px] h-[210px] rounded-[20px] bg-gray-200 rotate-45 shadow-[4px_0px_4px_rgb(0,0,0,.25)_inset,0px_-4px_4px_rgb(0,0,0,.25)_inset] flex flex-col">
            <div class="horizontal">
                <span class="circle first bg-green-400  top-[16px] left-[16px]"></span>
                <span class="circle second bg-blue-400 top-[16px] right-[16px]"></span>
            </div>
            <div class="star w-fit mx-auto mt-[47%] -translate-y-[50%]"><x-lucide-sparkle class="h-[20px] rotate-45" /> </div>
            <div class="vertical">
                <span class="circle third bg-[url(/images/img3.jpeg)] bottom-[16px] left-[16px]"></span>
                <span class="circle fourth bg-yellow-400 bottom-[16px] right-[16px]"></span>
            </div>
        </div>
    </div>
</div>