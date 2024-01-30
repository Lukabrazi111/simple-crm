<x-layout>
    <div class="mb-8">
        <a href="{{ route('tasks.create') }}" class="bg-green-600 py-2 px-5 rounded text-white font-medium">Create
            task</a>
    </div>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b border-gray-600 text-gray-800 font-medium">
            Tasks list
            <div class="flex items-center justify-end py-5">
                <!-- Dropdown menu -->
                <x-dropdown.option
                    :id-tag="'status'"
                    :label="'Show deleted:'"
                    :selected="'All'"
                    :data="['Open', 'Completed']"
                />
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
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, illum.</a>
                </th>
                <td class="px-6 py-4">
                    Kariane
                </td>
                <td class="px-6 py-4">
                    Client
                </td>
                <td class="px-6 py-4">
                    2024-03-09
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
