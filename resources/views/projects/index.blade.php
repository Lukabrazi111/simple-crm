<x-layout>
    <div class="mb-8">
        <a href="{{ route('projects.create') }}" class="bg-green-600 py-2 px-5 rounded text-white font-medium">Create
            project</a>
    </div>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b border-gray-600 text-gray-800 font-medium">
            Project list
            <div class="flex items-center justify-end py-5">
                <form action="#" method="POST" class="space-x-2">
                    <label>
                        <input type="text" placeholder="Search" class="py-2 px-2 border focus:outline-none rounded-lg">
                    </label>
                    <button type="submit" class="bg-blue-600 py-2 px-8 rounded-lg text-white font-medium">Submit
                    </button>
                </form>

            </div>
        </div>

        <x-delete-modal/>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Assigned to
                </th>
                <th scope="col" class="px-6 py-3">
                    Client
                </th>
                <th scope="col" class="px-6 py-3">
                    Deadline
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, molestiae.
                </th>
                <td class="px-6 py-4">
                    Jane Lopez
                </td>
                <td class="px-6 py-4">
                    Luka Khan
                </td>
                <td class="px-6 py-4">
                    2024-06-03
                </td>
                <td class="px-6 py-4">
                    open
                </td>
                <td class="px-6 py-4">
                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-x-2">
                            <a
                                href="#"
                                class="bg-blue-600 text-white px-6 py-2 rounded font-medium hover:bg-blue-700">Edit
                            </a>
                            <a
                                href="#"
                                id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                class="bg-red-600 text-white px-6 py-2 rounded font-medium hover:bg-red-700">Delete
                            </a>
                        </div>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-layout>
