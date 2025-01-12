<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amanda Wallis</title>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Font awesome --}}
        <script src="https://kit.fontawesome.com/c5ef5dbab6.js" crossorigin="anonymous"></script>

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="164x164" href="assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="poppins-regular bg-gray-50 text-gray-950" x-data="{current_screen: 'landing'}">
        <div class="hidden md:block pattern h-screen">
            &nbsp;
        </div>
        <div class="md:inset-0 md:absolute z-10 flex items-center justify-center min-h-screen">
            <div class="flex md:flex-row flex-col-reverse">
                <div class="md:w-[60vw] w-[90vw] bg-white rounded-md border border-black space-y-4 md:min-h-[60vh] min-h-[90vh]">
                    <x-home />
                    <x-frendnary />
                    <x-asms />
                    <x-capybara_php />
                    <x-time_investment />
                </div>

                <div class="py-5">
                    <div class="md:w-64 space-y-4 w-full">
                        <x-button
                            @click="current_screen = 'landing'"
                        >
                            Home
                        </x-button>
                        <x-button
                            @click="current_screen = 'capybara_php'"
                            bg="bg-amber-800"
                        >
                            CapybaraPHP
                        </x-button>
                        <x-button
                            @click="current_screen = 'time_investment'"
                            bg="bg-gray-800"
                        >
                            Time Investment
                        </x-button>
                        <x-button
                            bg="bg-[#FAEF9B]"
                            @click="current_screen = 'frendnary'"
                        >
                            Frendnary
                        </x-button>
                        <x-button
                            @click="current_screen = 'asms'"
                            bg="bg-[#194D2E]"
                        >
                            ASMS
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
