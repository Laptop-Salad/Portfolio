@props([
    'title',
])

<div
    x-data="{ clicking: false }"
    x-on:click="clicking = true"
    x-on:click.outside="clicking = false"
    x-bind:class="{ 'bg-cyan-900/50' : clicking, 'bg-black' : !clicking }"
    {{$attributes->merge(['class' => 'p-4 border-t border-gray-600'])}}
>
    @isset($title)
        <h2 class="font-semibold mb-4">{{$title}}</h2>
    @endisset

    {{$slot}}
</div>
