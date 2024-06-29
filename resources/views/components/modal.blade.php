@props(['src', 'title'])

<div x-data="{ modalOpen: false, cards : false}">
{{--    <div class="flex space-x-2 relative z-20 -top-5" :class="{'opacity-0' : !cards}">--}}
{{--        <x-button>HTML</x-button>--}}
{{--    </div>--}}

    <div class="relative h-full">
        <div
            :class="{'opacity-10' : focus && !cards, 'bg-my-green': cards, 'bg-my-red': !cards}"
            @mouseover="cards = true; focus = true"
            @mouseleave="cards = false; focus = false"
            class="p-4 cursor-pointer some-shadow rounded-md w-full h-full drop-shadow-md border-2 border-black"
            @click="modalOpen = true"
        >
            <div>
                <h2 class="font-bold text-2xl text-off-white">{{$title}}</h2>

                @isset($card)
                    <div class="my-4 h-full">
                        {{$card}}
                    </div>
                @endisset
            </div>
        </div>

        <div
            x-transition.duration.200ms
            x-show="cards"
            class="absolute right-[-10px] h-[102%] top-2 -z-10 bg-my-red w-full rounded-md border-2 border-black pb-2 pr-2"></div>
        <div
            x-transition.duration.400ms
            x-show="cards"
            class="absolute right-[-20px] h-[104%] top-4 -z-20 bg-my-green w-full rounded-md border-2 border-black pb-2 pr-2"></div>
    </div>

    <div x-show="modalOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex">
            <div x-cloak @click="modalOpen = false" x-show="modalOpen"
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200 transform"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
            </div>

            <div x-cloak x-show="modalOpen"
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 translate-y-full"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200 transform"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-full"
                 class="bg-off-white justify-self-end inline-block w-full min-h-screen p-8 mt-20 overflow-hidden text-left transition-all transform rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex justify-end">
                    <x-button @click="modalOpen = false" :inverse="true" >Exit</x-button>
                </div>

                <div class="flex items-center justify-center space-x-4">
                    <h2 class="font-bold text-3xl">{{$title}}</h2>
                </div>
                {{$slot}}
            </div>
        </div>
    </div>
</div>
