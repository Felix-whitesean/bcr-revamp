

<div class="min-h-[95vh] relative flex gap-4">
    <!-- We must ship. - Taylor Otwell -->
    <x-admin-sidebar class="h-full"></x-admin-sidebar>
    <div class="bg-white h-[full] w-[100%] rounded-lg p-4">
        <div class="static-components flex justify-between text-[18px] text-nowrap">
            <div class="navlink flex gap-4 m-auto z-[11]">
                <h3 class="root w-max text-[var(--secondary-color)] underline underline-offset-2">Default root</h3>
                <span class="inline-block h-[22px] w-[4px] -skew-x-12 bg-[var(--secondary-color)]"></span>
                <h3 class="child flex flex-col">
                    <span class="current font-bold text-black">Default component</span>
                    <span class="dropdown hidden">
                        1st child
                    </span>
                </h3>
                <button onclick="myFunction()" class="dropbtn"><i class="fi fi-rr-caret-down"></i></button>
            </div>
            <livewire:manage-account />
            
        </div>
        <div class="dynamic">
            <div class="home flex lg:gap-32 mt-4 text-[18px] p-16">
                <div class="left z-[11]">
                    <h3 class="font-bold text-[18px] tracking-[1.2px]">Mission</h3> 
                    <p>This is the mission statemet that would be appaended later after the whole content has been rolled out and the page is done on the lab. 
                        Has it reached the end yet? This should be half the page though rather than taking the whole width</p>
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
        </div>
    <div>
</div>