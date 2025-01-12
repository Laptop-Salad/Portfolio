@props(['inverse' => false, 'bg' => null])

<button
    x-data="{cards : false}"
    @mouseover="cards = true"
    @mouseleave="cards = false"
    x-bind:class="{ 'w-64 shadow-[0px_8px_0px_0px_rgba(0,0,0)]' : cards }"
    {{$attributes->merge([
        'class' => "relative grid grid-cols-[3fr_1fr] text-start transition-shadow duration-200 border border-black z-20 bg-white
        rounded-md w-full border
        md:border-s-0 md:w-60 md:rounded-e-md md:rounded-y-md md:rounded-s-none
        {{ $inverse ? 'text-off-white' : 'text-black' }"
    ])}}
>
    <span class="py-2 px-4">{{$slot}}</span>

    @isset($bg)
        <span class="border-s border-black rounded-e-[5px] py-2 px-5 m-0 {{$bg}}">&nbsp;</span>
    @endisset
</button>
