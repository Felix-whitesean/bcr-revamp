@php
    $r = request()->query('r', ''); // Default to 'home' if no section is selected
@endphp
<section class="min-h-[95vh] h-full relative flex flex-row gap-4">
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
            <div class="dynamic z-[11] relative">
                @if($r === '')
                    <div class="about flex lg:gap-32 mt-8 text-[18px] p-3">
                        <div>
                            <x-dynamic-tag :id=1/>
                            <br>
                            <x-dynamic-tag class="test" :id=2/>
                        </div>
                        <div class="right z-[11] self-center mr-4">
                            <div class="cont w-[210px] h-[210px] rounded-[20px] bg-gray-200 rotate-45 shadow-[4px_0px_4px_rgb(0,0,0,.25)_inset,0px_-4px_4px_rgb(0,0,0,.25)_inset] flex flex-col">
                                <div class="horizontal">
                                    <span class="circle first bg-green-400  top-[16px] left-[16px]"></span>
                                    <span class="circle second bg-blue-400 top-[16px] right-[16px]"></span>
                                </div>
                                <div class="star w-fit mx-auto mt-[47%] -translate-y-[50%]"><x-lucide-sparkle class="h-[20px] rotate-45"/> </div>
                                <div class="vertical">
                                    <span class="circle third bg-[url(/images/img3.jpeg)] bottom-[16px] left-[16px]"></span>
                                    <span class="circle fourth bg-yellow-400 bottom-[16px] right-[16px]"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($r === 'about-us')
                    <x-dynamic-tag :id=3></x-dynamic-tag>
                @else
                    <div class="hero error text-black-600 mt-32 bg-white-200 py-2 px-4 flex flex-col self-center">
                        <h2 class="text-gray-400">404</h2>
                        <p class="text-gray-400 m-auto text-24">Page Not Found</p>
                    </div>
                @endif
            </div>
    </div>
</section>
