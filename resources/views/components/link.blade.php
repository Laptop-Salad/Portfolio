@props(['inverse' => false])

<div class="relative z-50" x-data="{cards : false}">
    <a
        @mouseover="cards = true"
        @mouseleave="cards = false"
        {{$attributes}}
        target="_blank"
        class="block text-black {{ $inverse ? 'bg-my-red' : 'bg-my-green' }} cursor-pointer border-2 border-black py-2 px-4">
        {{$slot}}
    </a>

    <div
        x-transition.duration.200ms
        x-show="cards"
        class="absolute right-[-5px] h-[101%] top-1 -z-20 {{ $inverse ? 'bg-my-green' : 'bg-my-red' }} border-2 w-full border-black pb-2 pr-2"></div>
</div>
