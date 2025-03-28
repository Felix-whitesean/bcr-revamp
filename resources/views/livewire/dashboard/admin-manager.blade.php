@php
    $r = request()->query('r', ''); // Default to 'home' if no section is selected
@endphp
<section class="min-h-[95vh] h-full relative flex flex-row gap-4">
    <!-- We must ship. - Taylor Otwell -->
    <x-dashboard.admin-sidebar class="h-full"></x-dashboard.admin-sidebar>
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
                            <x-dashboard.dynamic-tag :id=1 :priority=2/>
                            <br>
                            <x-dashboard.dynamic-tag class="test" :id=2 :priority=2 />
                        </div>
                        <x-about-design class="right z-[11] self-center mr-4"/>
                    </div>
                @elseif($r === 'about-us')
                    <x-dashboard.dynamic-tag :id=3></x-dashboard.dynamic-tag>
                @else
                    <div class="hero error text-black-600 mt-32 bg-white-200 py-2 px-4 flex flex-col self-center">
                        <h2 class="text-gray-400">404</h2>
                        <p class="text-gray-400 m-auto text-24">Page Not Found</p>
                    </div>
                @endif
            </div>
    </div>
</section>
