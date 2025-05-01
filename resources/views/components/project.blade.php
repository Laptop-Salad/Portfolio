@props([
    'title',
    'description',
    'img',
    'alt',
    'gradient',
    'to_height' => 'group-hover:bottom-[-130px]',
    'from_height' => 'bottom-[-200px]',
    'img_width' => 'w-[40%]',

    'has_live' => true,
    'live_link' => '',

    'github_link',
])

<div class="space-y-4">
    <div class="relative rounded-[30px] bg-gradient-to-r {{$gradient}} w-full h-64 overflow-hidden group cursor-pointer">
        <!-- Sliding Content -->
        <div class="p-5 absolute {{$from_height}} transition-all duration-300 {{$to_height}} w-full z-10">
            <div class="flex justify-center">
                <img src="{{$img}}" alt="{{$alt}}" class="{{$img_width}} rounded-lg block drop-shadow-2xl">
            </div>
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 transition-all duration-300 bg-black/25 group-hover:bg-black/0 z-20 pointer-events-none"></div>
    </div>

    <div class="space-y-2 px-5">
        <h3 class="text-lg font-semibold">{{$title}}</h3>

        <div class="flex gap-x-4">
            @if ($has_live)
                <a href="{{$live_link}}">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span class="sr-only">Link to {{$title}} live site</span>
                </a>
            @endif

            <a href="{{$github_link}}">
                <i class="fa-brands fa-lg fa-github"></i>
                <span class="sr-only">Link to {{$title}} github repository</span>
            </a>
        </div>

        <p class="text-sm">{{$description}}</p>
    </div>
</div>

