@props([
    'target' => '_blank'
])

<a
    {{
        $attributes->merge([
            'class' => 'text-blue-500 p-2 rounded-lg hover:bg-[#00000010]'
        ])
    }}
    target="{{$target}}"
>
    {{$slot}}
</a>
