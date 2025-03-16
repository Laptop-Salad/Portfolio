<x-commands.wrapper class="h-screen">
    <div class="flex flex-col items-center justify-center h-full">
        <i class="fa-solid fa-robot text-8xl"></i>
        <p class="mt-4 text-xl">System Crashed</p>

        <x-button class="mt-4" wire:click="fix">
            <i class="fa-solid fa-wrench me-2 fa-sm"></i>
            Fix
        </x-button>
    </div>
</x-commands.wrapper>
