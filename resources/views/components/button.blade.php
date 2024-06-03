@props(['inverse' => false])

<div class="relative" x-data="{cards : false}">
    <button @mouseover="cards = true"
            @mouseleave="cards = false"
            {{$attributes}}
            class="text-black {{ $inverse ? 'bg-my-red' : 'bg-my-green' }} border-2 border-black py-2 px-4">
        {{$slot}}
    </button>

    <div
        x-transition.duration.200ms
        x-show="cards"
        class="absolute right-[-5px] h-[101%] top-1 -z-20 {{ $inverse ? 'bg-my-green' : 'bg-my-red' }} border-2 w-full border-black pb-2 pr-2"></div>
</div>
