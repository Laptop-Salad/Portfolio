@props([
    'skill',
    'icon'
])

<div {{$attributes->merge(['class' => 'flex items-center space-x-4 border border-gray-600 p-2 rounded-lg w-32'])}}>
    @isset($icon)
        <i class="{{$icon}}"></i>
    @endisset


    <p>{{$skill}}</p>
</div>
