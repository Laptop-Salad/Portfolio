<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amanda Wallis</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Font awesome --}}
        <script src="https://kit.fontawesome.com/c5ef5dbab6.js" crossorigin="anonymous"></script>

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased min-h-screen w-full bg-off-white">

    <div class="h-screen p-5 md:p-10 box-border bg-my-green border-2 border-black">
        <div class="h-full w-full flex flex-col justify-center bg-off-white border-2 border-black p-10">
            <h1 class="cursor-pointer font-bold text-4xl md:text-9xl text-my-red">Amanda Wallis</h1>

            <p class="mt-4">I create websites.</p>

            <div class="flex items-center space-x-2 mt-4">
                <x-link href="https://www.linkedin.com/in/amanda-wallis-b92307261/">LinkedIn</x-link>
                <x-link href="https://github.com/Laptop-Salad">GitHub</x-link>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center space-y-10 p-10 md:px-40 min-h-screen">
        <div class="grid md:grid-cols-3 gap-16">
           <x-frendnary />

            <x-asms />

            <x-wb />

            <x-schoolscanner />
        </div>
    </div>
    </body>
</html>
