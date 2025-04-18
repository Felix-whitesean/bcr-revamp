@php
    $page = request()->query('page'); // Default to 'home' if no section is selected
@endphp
<div class="navbar flex gap-8 flex-col overflow-hidden">
    <div class="hero-views h-[65vh] overflow-y-auto relative flex flex-col">
        @if($page == '')
            {{$page}}
            <div class="hero home flex lg:flex-row flex-col lg:max-w-[80%] m-auto mt-8">
                <div class="text w-[50%] text-[22px] mt-8 text-center w-[50%] self-center">
                    <h2 class="max-w-[261px]">Growing Resilience, Securing futures</h2>
                    <p class="mt-[40px] text-center">We combat climate change through mitigation and adaptation, removing carbon  and building climate resilient communities and landscapes </p>
                    <button class="lg:w-[320px] lg:p-0 px-8  w-max m-auto mt-8 bg-white leading-[40px] self-center">
                        <i class="fi-rs-bulb"></i>
                        <span class="text-[18px]">Learn More</span>
                    </button>
                </div>
                <div class="flex justify-around">
                    <img class="opacity-[.7] w-[300px] h-[300px] lg:ml-32 self-center mt-8 lg:mt-0" src="{{ asset('images/download.jpeg') }}" alt="Biochar process">
                </div>
            </div>
        @elseif($page === 'projects')
            <div style="background-image:url('{{ asset('images/download.jpg') }}');" class="projectpg relative bg-cover bg-center bg-fixed min-h-full">
                @if(request()->query('s') === 'true')
                    <section class="project_container self-start w-fit m-auto h-[95%] relative z-[111] flex gap-8 md:flex-wrap sm:flex-wrap">
                        <div class="w-[382px] h-[100%] min-h-[50%] mt-2 bg-white shadow-[0_4px_5px_rgba(0,0,0,.2)] rounded-md text-center">
                            <img src="{{asset('images/plant2.png')}}" class="image h-[45%] w-full bg-[rgb(0,0,0,.1)] rounded-t-md"/>
                            <h2 class="text-[16px] font-bold my-4">Growing Resilience, Securing futures</h2>
                            <p class="m-4 text-[16px]">We combat climate change through mitigation and adaptation, removing carbon and building climate resilient communities and landscapes</p>
                            <button class="read-more bg-[(--white-4)] py-2 px-6 w-fit">View full project profile</button>
                        </div>
                        <div class="w-[382px] h-[100%] min-h-[50%] mt-2 bg-white shadow-[0_4px_5px_rgba(0,0,0,.2)] rounded-md text-center">
                            <img src="{{asset('images/plant2.png')}}" class="image h-[45%] w-full bg-[rgb(0,0,0,.1)] rounded-t-md"/>
                            <h2 class="text-[16px] font-bold my-4">Growing Resilience, Securing futures</h2>
                            <p class="m-4 text-[16px]">We combat climate change through mitigation and adaptation, removing carbon and building climate resilient communities and landscapes</p>
                            <button class="read-more bg-[(--white-4)] py-2 px-6 w-fit">View full project profile</button>
                        </div>
                        <div class="w-[382px] h-[100%] min-h-[50%] mt-2 bg-white shadow-[0_4px_5px_rgba(0,0,0,.2)] rounded-md text-center">
                            <img src="{{asset('images/plant2.png')}}" class="image h-[45%] w-full bg-[rgb(0,0,0,.1)] rounded-t-md"/>
                            <h2 class="text-[16px] font-bold my-4">Growing Resilience, Securing futures</h2>
                            <p class="m-4 text-[16px]">We combat climate change through mitigation and adaptation, removing carbon and building climate resilient communities and landscapes</p>
                            <button class="read-more bg-[(--white-4)] py-2 px-6 w-fit">View full project profile</button>
                        </div>
                    </section>
                @else
                    <div class="relative z-[111] text-center ">
                        @component('components.designs.project-design')
                        @endcomponent
                        <a href="?page=projects&s=true"><button class="bg-[var(--white-4)] py-2 mt-8 px-16 text-[18px]"><i class="fi fi-rr-blood-test-tube-alt mr-4"></i> View sample projects</button></a>
                    </div>
                @endif
            </div>
        @elseif($page === 'about')
            <section class="flex flex-col w-[70%] m-auto gap-4">
                <div class="flex justify-between self-center  gap-8">
                    <div class="">
                        <x-dashboard.dynamic-tag :id=1/>
                        <br>
                        <x-dashboard.dynamic-tag class="test" :id=2/>
                    </div>
                    <x-about-design class="mt-4 mr-4 self-center"/>
                </div>
                <button class="flex gap-4 w-fit self-start px-16 py-2 rounded-sm border border-[2px] text-[var(--secondary-color)] font-bold shadow-[1px_1px_5px_red-400)] hover:cursor-pointer hover:text-green-900 hover:bg-white">
                    <x-fas-hand-holding-dollar class="w-6 h-6" />
                    <span class="text-[18px]">Donate</span>
                </button>
            </section>
        @elseif($page === 'explore')
            <div>
                <h2>Recent opportunities</h2>
                <table class="table-auto px-16 lg:w-[80%] max-w-[800px] m-auto text-[18px] border-separate border-spacing-y-8">
                        <tr class="py-4">
                            <td>
                                <div class="flex w-[85%] justify-between">
                                    <span>Managing director</span>
                                    <span class="text-[#737373] border-b-[1px] border-gray-300 px-8">open</span>
                                </div>
                            </td>
                            <td>
                                <button class="px-4 bg-[#374957] text-white focus:text-[#374957]">Details</button>
                                <button class="px-4 bg-[var(--white-75)]">Apply</button>
                            </td>
                        </tr>
                        <tr class="py-4">
                            <td>
                                <div class="flex w-[85%] justify-between">
                                    <span>Projects and resource manager</span>
                                    <span class="text-[#737373] border-b-[1px] border-gray-300 px-8">open</span>
                                </div>
                            </td>
                            <td>
                                <button class="px-4 bg-[#374957] text-white focus:text-[#374957]">Details</button>
                                <button class="px-4 bg-[var(--white-75)]">Apply</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flex w-[85%] justify-between">
                                    <span>Volunteer</span>
                                    <span class="text-[#737373] border-gray-300 px-8">closed</span>
                                </div>
                            </td>
                            <td>
                                <button class="px-4 bg-[#374957] text-white focus:text-[#374957]">Details</button>
                                <button class="px-4 bg-[var(--white-75)] hidden">Apply</button>
                            </td>
                        </tr>
                </table>
            </div>
        @elseif($page === 'login')
            <x-auth page="{{ $page='login' }}" ></x-auth>
        @elseif($page === 'signup')
            <x-auth page="{{ $page='signup' }}" ></x-auth>
        @elseif($page === 'get-started')
            <x-auth page="{{ $page,'login' }}" ></x-auth>
        @else
            <div class="hero error flex flex-col self-center text-black-600 mt-32 bg-white-200 py-2 px-4">
                <h2 class="text-gray-400">404</h2>
                <p class="text-gray-400 m-auto">Page Not Found</p>
            </div>
        @endif

    </div>
    <div class="buttons flex lg:flex-row flex-col lg:gap-8 gap-2 justify-between bottom-16 lg:mx-16 md:mx-2 leading-[22px] lg:px-0 px-8 sm:self-center">
        <x-navigation-button link="Home" iconClass="fi-rs-bank" page='' class="bg-green-200"/>
        <x-navigation-button link="About us" iconClass="fi-rs-info" page='about'/>
        <x-navigation-button link="Projects" iconClass="fi fi-rs-rectangle-list"  page='projects'/>
        <x-navigation-button link="Explore opportunities" iconClass="fi fi-rr-chair-office" page='explore'/>
        <a href="?page=get-started" class="button min-w-fit font-bold text-[var(--secondary-color)] rounded-sm border-[2px] border-[var(--primary-color)] hover:text-green-900 hover:bg-white px-8 lg:px-24 py-2 tracking-[.6px] text-nowrap self-center">Get started </a>
    </div>
</div>