<x-modal src="assets/frendnary/welcome.png" title="Frendnary">

    <x-slot:card>
        <div>
            <img src="assets/frendnary/group-with-def.png" alt="Group page" class="h-full border-2 border-black w-full rounded-md">

            <p class="my-2 text-off-white">Frendnary brings the memories and lore of friend groups into their own central and collaborative private dictionary.</p>
        </div>
    </x-slot:card>

    <div class="mt-4 space-x-2 space-y-4">
        <div class="flex space-x-2 justify-center">
            <x-link href="https://github.com/Laptop-Salad/Frendnary">Source</x-link>
            <x-link href="https://frendnary.amandawallis.com/">Live</x-link>
        </div>

        <div class="px-5 md:px-20 space-y-4">
            <div class="h-1/2 grid md:grid-cols-3 gap-4 my-20">
                <img src="assets/frendnary/dashboard.png" alt="User dashboard" class="h-full border-2 border-black w-full rounded-md">
                <img src="assets/frendnary/group-with-def.png" alt="Group page" class="border-2 border-black h-full w-full rounded-md">
                <img src="assets/frendnary/add-def.png" alt="Add definition to group" class="border-2 border-black h-full w-full rounded-md">
            </div>

            <p>
                This project is a collaborative dictionary. It came about because my friends and
                I tended to come up with a lot of definitions for things and we kept them in the
                description of our group chat. Except its grown incredibly long and Im not sure when we will hit the word limit.
                But more than that, it holds a lot of memories and references to different times in our lives.
            </p>

            <p>
                Currently it allows you to store lore and definitions. You can search, filter and trace back the person that
                submitted the item. The groups are designed to be collaborative so no one person should be an administrator. This means that
                a voting system will be implemented for any administrative decisions such as deleting a chat or removing someone from a group.
            </p>
        </div>
    </div>
</x-modal>
