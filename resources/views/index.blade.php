<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BCR</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon-uicons/css/all/all.css">
        <meta name="csrf-token" content="{{csrf_token()}}">
        @livewireStyles
        <link rel="icon" href="{{ asset('images/f1.png')}}" type="icon">
        <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    </head>
    <body>
        <div class="index max-w-[96vw] min-h-[100vh] m-auto bg-[#EDFFED]"">
            <section class="flex flex-row w-full justify-between bg-[#FFFFFF] py-4 px-6">
                <div class="flex">
                    <img src="" alt="" class="w-fit"/>
                    <h4 class="name">Biochar Climate Resolution</h4>
                </div>
                <div class="flex flex-row gap-4">
                    <li>Home</li>
                    <li>Dashboard</li>
                    <li>Blog</li>
                </div>
            </section>
            <section class="font-[Istok_Web] min-h-[90vh]">
                <div class="landing-content m-auto w-fit max-w-[470px] text-center ">
                    <h1 class="font-bold text-[28px]">The only way to secure our future is by crafting it today!</h1>
                    <p class="text-[16px] max-w-[378px] mt-4 m-auto">Join us today for exciting discoveries and the beginning of a greater course towards natural earth healing process.</p>
                    <div class="border border-2 border-transparent mt-6 m-auto w-fit">
                        <div class="image-set relative">
                            <img src="@assets/images/pr.png" alt="" class="w-[37px] h-[37px] rounded-[50%] absolute left-0 z-[11] top-0">
                            <div class="w-[37px] h-[37px] rounded-[50%] absolute left-[3%] z-[10]  top-0 bg-[var(--primary-color)]"></div>
                            <img src="@assets/images/pr.png" alt="" class="w-[37px] h-[37px] rounded-[50%] absolute left-[5%] z-[9]  top-0 border border-2 border-black">
                        </div>
                        <div class="ml-[80px] mt-2 text-left text-[20px]">
                            <span class="font-bold">10,000</span>
                            <span class="italic">(plus)</span>
                            <span class="font-bold text-[var(--secondary-color)]">joiners</span>
                        </div>
                        
                    </div>
                    <button class="mt-8 px-16 py-[6px] rounded-md bg-[var(--primary-color)] font-bold text-white text-[20px] m-auto shadow-[0_0_0]">Get started</button>
                </div>
                <section class="image-carousel mx-auto mt-12 w-fit p-4 bg-[#FEFEFE] max-w-[98%] flex flex-row gap-4 relative">
                    <img src="@assets/images/chaff.jpg" alt="" class="lg:w-[350px] md:w-[300px]  sm:w-[200px] h-[190px] relative z-[1]">
                    <img src="@assets/images/cobs.jpg" alt="" class="lg:w-[350px] md:w-[300px]  sm:w-[200px] h-[190px] relative z-[1]">
                    <img src="@assets/images/maize-full.jpg" alt="" class="lg:w-[350px] md:w-[300px]  sm:w-[200px] h-[190px] relative z-[1]">
                </section>  
            </section>
            <section class="about-highlight mt-[60px] bg-[var(--primary-color)] text-white min-h-[30%] w-full flex flex-col lg:flex-row gap-4 p-8 justify-between">
                <div class="text-container p-8 lg:p-24 max-w-full lg:max-w-[50%] flex flex-col gap-4">
                    <h1 class="font-bold text-[20px]">About us</h1>
                    <p class="text-[20px]">Biochar climate resolution is a pioneer company in biochar economy in East Africa with various partners worldwide. Biochar climate resolution 
                        is a pioneer company in biochar economy in East Africa with various partners worldwide. Biochar climate resolution is a pioneer company in 
                        biochar economy in East Africa with various partners worldwide</p>
                    <button class="border border-2 border-white rounded-md px-4 py-2 self-start"><a href="" class="text-white no-underline text-[16px]">Read more</a></button>
                </div>
                <div class="w-full lg:max-w-[50%] self-center lg:self-end">
                    <div class="image relative w-[405px] h-[452px]">
                        <img src="@assets/images/about-img.jpeg" alt="" class="absolute top-0 left-0 w-full h-full object-cover z-[1]">
                    </div>
                </div>

            </section>
        </div>
        
    </body>
</html>