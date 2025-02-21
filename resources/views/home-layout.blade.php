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
            <div class="background-layout  text-white w-[95vw] lg:h-[95vh] h-[98vh] m-auto my-[1rem] max-w-[100vw] overflow-hidden"></div>
            <div class="main absolute bg-[var(--white-75)] w-[98vw] h-max min-h-[95vh] z-50 mx-4 pr-8 pt-0 left-0 top-0 rounded-md pb-8 z-11">
                <div class="w-[98vw] m-auto">
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
            </div>
        </body>
    </html>