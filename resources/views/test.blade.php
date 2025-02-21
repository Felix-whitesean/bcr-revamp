@livewireStyles
@livewireScripts

<!Doctype HTML>
    <html>
        <head>
            <title>Test page</title>
                <!-- Styles / Scripts -->
                @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body class="flex flex-col gap-[80px] bg-red-600 p-[200px]" >
            <div class="">
                <p>This is the default section of the page </p>
            </div>
            <livewire:dynamic-content />
        </body>
    </html>