<div>
    <div class="min-h-[90vh] flex flex-col">
        <div class="p-4">
            <p class="text-sm">Amanda's Portfolio</p>
        </div>

        @empty($this->components)
            <div class="flex flex-col items-center justify-center flex-1 space-y-4">
                <x-shortcut name="Command Palette" :buttons="['⌘', 'P']" />
                <x-shortcut name="GitHub" :buttons="['⌘', 'G']" />
                <x-shortcut name="LinkedIn" :buttons="['⌘', 'L']" />
            </div>
        @endempty

        @if (!empty($this->components))
            <div class="flex flex-col justify-end flex-1 w-full h-full">
                @foreach($this->components as $c)
                    <x-dynamic-component component="commands.{{$c['component']}}" :args="$c['args']" />
                @endforeach
            </div
        @endif
    </div>

    @if ($this->show_input)
        <div class="h-[10vh]">
            <input
                wire:model="input"
                x-on:keyup.enter="$wire.handleInput()"
                x-ref="input"
                x-init="$refs.input.focus()"
                type="text"
                class="bg-transparent border-gray-400 border-t w-full h-full px-4 outline-transparent focus:outline-none"
                placeholder="Type 'About' or 'Help'"
            >
        </div>
    @endif
</div>
