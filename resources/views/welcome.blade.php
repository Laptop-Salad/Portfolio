<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amanda Wallis</title>

        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

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
    <body class="p-12">
        <div class="w-full min-h-screen flex flex-col">
            <livewire:navbar />

            <div class="flex-grow flex flex-col justify-center gap-y-4">
                <p>
                    <i class="fa-solid fa-location-dot me-2"></i>
                    Based in the UK
                </p>
                <h1 class="text-4xl font-semibold">Amanda Wallis</h1>
                <p class="md:max-w-[60%]">
                    I am a Fullstack Software developer. I work on projects that range from complex architectural tasks
                    to cosmetic improvements on user-facing features.
                </p>
                <p class="md:max-w-[60%]">
                    I enjoy working on architectural tasks that allow me to explore unique techniques and patterns.
                </p>
            </div>
        </div>

        <div id="projects" class="w-full min-h-screen">
            <h2 class="text-xl mb-6">Selected Projects</h2>

            <div class="grid md:grid-cols-2 gap-20 mb-20">
                <x-project
                    title="RepetoLang"
                    description="A dynamically typed language inspired by PHP, designed for console applications and transpiled into C. [In progress]"
                    img="assets/repeto.png"
                    alt="phpemi"
                    gradient="from-orange-600 to-amber-600"
                    from_height="bottom-[-50px]"
                    to_height="group-hover:bottom-[-30px]"
                    img_width="md:w-[80%]"
                    :has_live="false"
                    github_link="https://github.com/Laptop-Salad/RepetoLang"
                />

                <x-project
                    title="PHPEMI"
                    description="Equivalence Modulo Input (EMI) for finding bugs in the PHP Interpreter. [In progress]"
                    img="assets/phpemi.png"
                    alt="phpemi"
                    gradient="from-green-600 to-lime-600"
                    from_height="bottom-[-50px]"
                    to_height="group-hover:bottom-[-30px]"
                    img_width="w-full"
                    :has_live="false"
                    github_link="https://github.com/Laptop-Salad/PHPEMI"
                />

                <x-project
                    title="LoxoUI"
                    description="Tailwind Mobile UI Component Library for svelte."
                    img="assets/loxoui.png"
                    alt="loxoui"
                    gradient="from-zinc-600 to-slate-600"
                    img_width="md:w-[50%]"
                    :has_live="false"
                    github_link="https://github.com/Laptop-Salad/LoxoUI"
                />

                <x-project
                    title="TimeInvestment"
                    description="An easy way to track your to-dos and stay motivated by seeing how each task impacts you."
                    img="assets/time-investment.png"
                    alt="phpemi"
                    gradient="from-sky-600 to-cyan-600"
                    from_height="bottom-[-60px]"
                    to_height="group-hover:bottom-[-20px]"
                    img_width="md:w-[75%]"
                    github_link="https://github.com/Laptop-Salad/TimeInvestment"
                    live_link="https://timeinvestment.amandawallis.com/"
                />
            </div>
        </div>
    </body>
</html>
