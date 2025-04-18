@php
    $isAdminPage = Request::is('dashboard');
    $isIndex = Request::is('');
@endphp

<!Doctype HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>BCR | Home</title>
            <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon-uicons/css/all/all.css">
            <meta name="csrf-token" content="{{csrf_token()}}">
            @livewireStyles
            <link rel="icon" href="{{ asset('images/f1.png')}}" type="icon">
            <link rel="stylesheet" href="{{ asset('css/output.css') }}">
        </head>
        <body class="bg-[var(--white-grey)] overflow-hidden lg:overflow-y-hidden overflow-y-auto max-w-[100vw]" >
            <div class="background-layout text-white w-[95vw] lg:h-[95vh] h-[98vh] m-auto my-[1rem] max-w-[100vw] overflow-hidden"></div>
            <div class="main absolute w-[98vw] h-max min-h-[95vh] left-0 top-0 rounded-md pb-8 z-[11] overflow-hidden flex flex-col {{ $isAdminPage ? 'transparent ml-4' : 'bg-[var(--white-75)] mx-4 pr-8 pt-0'}}">
                <div id="toast" class="toast absolute right-4 top-4 w-[300px] px-4 pt-2 pb-4 h-fit z-[1111] overflow-y-auto transition-opacity duration-300 ease-in-out opacity-100 flex flex-col hidden">
                    <div class="flex justify-between">
                        <div class="flex w-full gap-4 self-end"></div>
                    </div>
                    <p class="text-white mt-2"></p>
                </div>
                @if ($isAdminPage)
                    <livewire:dashboard.admin-manager />
                @else
                    <x-home.default-home-container></x-home.default-home-container>
                @endif
                <x-info/>
            </div>
            @livewireScripts
        </body>
    </html>