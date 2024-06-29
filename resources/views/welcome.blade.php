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
    <body
        class="font-sans antialiased min-h-screen w-full bg-my-red"
        x-data="{ focus : false }">

        <div class="background-transition h-screen w-full flex flex-col md:items-start items-center justify-center p-10 md:p-20"
             :class="{ 'bg-my-red': focus, 'bg-off-white': !focus }">

            <h1 class="text-center cursor-pointer font-bold text-6xl md:text-9xl"
                :class="{ 'text-off-white': focus, 'text-my-red': !focus }">
                Amanda Wallis
            </h1>

            <p class="text-center text-xl mt-4" :class="{ 'text-black': !focus, 'text-off-white': focus }">I create websites.</p>

            <div class="flex items-center space-x-2 mt-4">
                <x-link href="https://www.linkedin.com/in/amanda-wallis-b92307261/">LinkedIn</x-link>
                <x-link href="https://github.com/Laptop-Salad">GitHub</x-link>
            </div>
        </div>

    <div class="background-transition flex flex-col items-center space-y-10 p-10 md:p-20 min-h-screen rounded-b-3xl"
         :class="{ 'bg-off-white': !focus }">
        <div class="grid md:grid-cols-2 gap-8 md:gap-16 min-h-screen">
           <x-frendnary />

            <x-asms />

            <x-wb />

            <x-schoolscanner />
        </div>
    </div>

    <div class="min-h-screen p-10 md:p-20 text-off-white space-y-4">
        <p class="font-bold text-4xl md:text-9xl">Let's chat!</p>
        <p class="text-lg font-semibold">I am open to discussing ideas for collaboration, answer any questions or to simply talk.</p>

        <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
            <x-link>LinkedIn</x-link>
            <x-link href="https://github.com/Laptop-Salad">GitHub</x-link>
        </div>
    </div>
    </body>
</html>
