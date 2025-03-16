@props([
    'name',
    'buttons' => [],
])

<div class="flex items-center space-x-2">
    <p class="text-gray-200 w-64">{{$name}}</p>

    @foreach($buttons as $button)
        <x-display-button>{{$button}}</x-display-button>
    @endforeach
</div>
