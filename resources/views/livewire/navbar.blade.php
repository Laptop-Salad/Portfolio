<div>
    <header class="hidden md:flex justify-between">
        <p class="font-bold">Amanda Wallis</p>

        <nav class="space-x-6">
            <a href="#projects">Projects</a>
            <a href="https://www.linkedin.com/in/amanda-wallis-b92307261/">
                <i class="fa-brands fa-linkedin"></i>
                <span class="sr-only">Link to my linkedin</span>
            </a>
            <a href="https://github.com/Laptop-Salad">
                <i class="fa-brands fa-github"></i>
                <span class="sr-only">Link to my github</span>
            </a>
        </nav>
    </header>

    <div x-data="{ show: false }" class="md:hidden block">
        <div class="flex justify-between">
            <p class="font-bold">Amanda Wallis</p>

            <button x-on:click="show = !show">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <header
            x-show="show"
            class="p-12 top-0 left-0 bg-white absolute w-screen h-screen"
        >
            <div class="flex justify-between mb-10">
                <p class="font-bold">Amanda Wallis</p>

                <button x-on:click="show = false">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <nav class="flex flex-col gap-y-4">
                <a href="#projects" class="text-lg" x-on:click="show = false">Projects</a>

                <div class="mt-10 space-x-4">
                    <a href="https://www.linkedin.com/in/amanda-wallis-b92307261/">
                        <i class="fa-brands fa-linkedin fa-lg"></i>
                        <span class="sr-only">Link to my linkedin</span>
                    </a>
                    <a href="https://github.com/Laptop-Salad">
                        <i class="fa-brands fa-github fa-lg"></i>
                        <span class="sr-only">Link to my github</span>
                    </a>
                </div>
            </nav>
        </header>
    </div>
</div>
