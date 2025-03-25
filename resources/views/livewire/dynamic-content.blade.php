@php
    $page = request()->query('page', ''); // Default to 'home' if no section is selected
    $formtype = request()->query('formtype');
@endphp
<div class="navbar flex gap-8 flex-col overflow-hidden">
    <div class="hero-views h-[65vh] overflow-y-auto">
        @if($page === '')
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
            <h2>Projects</h2>
            <p>Here are our latest projects focusing on climate resilience.</p>
        @elseif($page === 'about')
            <x-auth formtype="{{ $formtype,'signin' }}" ></x-auth>
        @elseif($page === 'explore')
            <x-sign-up></x-sign-up>
        @elseif($page === 'get-started')
            <x-auth formtype="{{ $formtype,'signup' }}" ></x-auth>
        @else
            <div class="hero error flex flex-col self-center text-black-600 mt-32 bg-white-200 py-2 px-4">
                <h2 class="text-gray-400">404</h2>
                <p class="text-gray-400 m-auto">Page Not Found</p>
            </div>
        @endif

    </div>
    <div class="buttons flex lg:flex-row flex-col lg:gap-8 gap-2 justify-between bottom-16 lg:mx-16 md:mx-2 leading-[22px] lg:px-0 px-8 sm:self-center">
        <x-navigation-button link="Home" iconClass="fi-rs-bank" page='default' class="bg-green-200"></x-navigation-button>
        <x-navigation-button link="About us" iconClass="fi-rs-info" page='about'></x-navigation-button>
        <x-navigation-button link="Projects" iconClass="fi fi-rs-rectangle-list"  page='projects'></x-navigation-button>
        <x-navigation-button link="Explore opportunities" iconClass="fi fi-rr-chair-office" page='explore'></x-navigation-button>
        <a href="?page=get-started" class="button min-w-fit font-bold text-[var(--secondary-color)] rounded-sm border-[2px] border-[var(--primary-color)] hover:text-green-900 hover:bg-white px-8 lg:px-24 py-2 tracking-[.6px] text-nowrap self-center">Get started </a>
    </div>
</div>