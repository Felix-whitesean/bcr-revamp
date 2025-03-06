@php
    $isAdminPage = Request::is('dashboard');
@endphp

@livewireStyles
@livewireScripts

<!Doctype HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>BCR | Home</title>
            <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon-uicons/css/all/all.css">
            <link rel="icon" href="{{ asset('images/f1.png')  }}" type="icon">
            <link rel="stylesheet" href="{{ asset('css/output.css') }}">
        </head>
        <body class="bg-[var(--white-grey)] overflow-hidden lg:overflow-y-hidden overflow-y-auto max-w-[100vw]" >
            <div class="background-layout text-white w-[95vw] lg:h-[95vh] h-[98vh] m-auto my-[1rem] max-w-[100vw] overflow-hidden"></div>
            <div class="main absolute w-[98vw] h-max min-h-[95vh] left-0 top-0 rounded-md pb-8 z-[11] overflow-hidden flex flex-col {{ $isAdminPage ? 'transparent ml-4' : 'bg-[var(--white-75)] mx-4 pr-8 pt-0'}}">
                @if ($isAdminPage)
                    <x-admin-page class="h-full"></x-admin-page>
                @else
                    <x-default-home-container></x-default-home-container>
                @endif
            </div>
        </body>
    </html>