@props(['inverse' => false])

<div class="relative z-10" x-data="{cards : false}">
    <a
        @mouseover="cards = true"
        @mouseleave="cards = false"
        {{$attributes}}
        target="_blank"
        class="block {{ $inverse ? 'bg-my-red text-off-white' : 'bg-my-green text-black' }} rounded-md cursor-pointer border-2 border-black py-2 px-4">
        {{$slot}}
    </a>

    <div
        x-transition.duration.200ms
        x-show="cards"
        class="absolute right-[-5px] h-[101%] top-1 -z-20 rounded-md {{ $inverse ? 'bg-my-green' : 'bg-my-red' }} border-2 w-full border-black pb-2 pr-2"></div>
</div>
