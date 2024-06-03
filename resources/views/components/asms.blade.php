<x-modal src="assets/asms.png" title="Academic Score Management System (ASMS)">
    <div class="mt-4 space-x-2 space-y-2">
        <div class="flex space-x-2 justify-center">
            <x-link href="https://github.com/Laptop-Salad/ASMS">Source</x-link>
            <x-link href="https://asms.amandawallis.com/">Live</x-link>
        </div>

        <div class="px-5 md:px-20 space-y-4">
            <div class="h-1/2 grid md:grid-cols-3 gap-4 my-20">
                <img src="assets/asms-dash.png" alt="Dashboard" class="h-full border-2 border-black w-full rounded-md">
                <img src="assets/asms-docs.png" alt="Docs for API" class="border-2 border-black h-full w-full rounded-md">
                <img src="assets/asms-report.png" alt="Custom report from API" class="border-2 border-black h-full w-full rounded-md">
            </div>

            <p>
                Academic Score Management System is inspired by a project my team did in college. The project was a
                website where parents, students and teachers can go to manage and view their student’s score. Later,
                we did an IOT project which was a sort of continuation of the idea where it was a card scanner that
                could track student’s attendance.
            </p>

            <p>
                The project would require some sort of storage, way to generate data and a place to display the analysis
                displayed on the device. So I decided to build an API and later on it evolved to a management system. So
                I have the team member who came up with the idea to thank.
            </p>

            <div class="pt-5">
                <p class="mb-2">
                    Currently, ASMS allows you to:
                </p>

                <ul class="space-y-2">
                    <li class="border-2 border-black bg-my-green p-2">
                        View teachers, houses, departments and students.
                    </li>
                    <li class="border-2 border-black bg-my-green p-2">
                        View each student which can have points assigned to them and card entries (added via the API).
                    </li>
                    <li class="border-2 border-black bg-my-green p-2">
                        View reports which currently can only be generated via the API.
                    </li>
                    <li class="border-2 border-black bg-my-green p-2">
                        Has a middleware which ensures the token used for the API has permissions to the resources its trying to access.
                    </li>
                </ul>
            </div>

            <div class="pt-5">
                <p class="mb-2">The next steps for this project is to:</p>

                <ul class="space-y-2">
                    <li class="border-2 border-black bg-my-green p-2">
                        Invite other users to manage your school with different levels of permissions.</li>
                    <li class="border-2 border-black bg-my-green p-2">
                        Each teacher has their own account generated for them.</li>
                    <li class="border-2 border-black bg-my-green p-2">
                        Have reports that can be generated through the website.</li>
                </ul>
            </div>
        </div>
    </div>
</x-modal>
