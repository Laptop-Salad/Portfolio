@props(['args'])

<x-commands.wrapper :title="$args['command']" class="border-s-4 border-s-red-500 bg-red-500/25">
    <p>amanda's portfolio: command not found: {{$args['command']}}</p>
</x-commands.wrapper>
