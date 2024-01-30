<x-layout>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b mb-2 text-gray-800 font-medium">
            <p class="border-b mb-2 pb-2 text-xl">Create task</p>

            <form action="#" method="POST" class="mt-4">
                <div class="mb-5">
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="title"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="description"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea type="text" id="description"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    ></textarea>
                </div>
                <div class="mb-5">
                    <label for="deadline"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
                    <input type="date" id="deadline"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                </div>
                <x-dropdown.option
                    :id-tag="'users'"
                    :label="'Assigned user'"
                    :selected="'Choose a user'"
                    :data="['user1', 'user2', 'user3']"
                />
                <x-dropdown.option
                    :id-tag="'clients'"
                    :label="'Assigned client'"
                    :selected="'Choose a client'"
                    :data="['client1', 'client2', 'client3']"
                />
                <x-dropdown.option
                    :id-tag="'projects'"
                    :label="'Assigned project'"
                    :selected="'Choose a project'"
                    :data="['Benefit Clarity', 'Basic authorization / registration']"
                />
                <x-dropdown.option
                    :id-tag="'status'"
                    :label="'Status'"
                    :selected="'Choose a status'"
                    :data="['open', 'closed', 'completed']"
                />
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save
                </button>
            </form>

        </div>
    </div>
</x-layout>
