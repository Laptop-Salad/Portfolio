<x-modal src="assets/schoolscanner.png" title="School Scanner (Team Project)">
    <div class="mt-4 space-x-2 space-y-4">
        <div class="flex space-x-2 justify-center">
            <x-link href="https://github.com/Laptop-Salad/AcaSScanner">Source</x-link>
        </div>

        <div class="px-5 md:px-20 space-y-4">
            <img src="assets/acas-diagram.png" alt="Event driven architecture for the scanner" class="h-full border-2 border-black w-full rounded-md">

            <p class="text-sm text-gray-600">
                Some annotation here: Green represents producers or the things that dispatch events, yellow
                represents consumers or the things that subscribe to an event and blue represents a service that
                hides away logic like making requests to the API. Main would be the script that ties everything together. The project follows the
                <a href="https://refactoring.guru/design-patterns/observer" class="text-blue-500 font-bold">observer pattern</a>.
            </p>

            <p>SchoolScanner is actually a group project but I thought it was worth mentioning from an architecture point of view.</p>

            <p>
                This project is for an IOT class and is supposed to be a device that you put in front of the school and students swipe their card each day to mark that they attended. The scanner communicates with the ASMS API to store data.
            </p>

            <p>
                The scanner does not use a real card scanner due to a lack of resources but instead
                uses a fake “runner” script. The runner script will run the scanning process for as
                many cards are on the API for 1 week and then generate a report which is visible on
                the API.
            </p>

            <p>
                For this project I had to go a bit outside my comfort zone and use event-driven architecture. While this is about good practice and writing clean code it is also about clearly showing a distinction between the runner, the fake card scanner,
                the fake button to generate a report, and the actual software.
            </p>
        </div>
    </div>
</x-modal>
