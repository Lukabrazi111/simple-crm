<x-layout>
    <div class="mb-8">
        <a href="{{ route('users.create') }}" class="bg-green-600 py-2 px-5 rounded text-white font-medium">Create
            user</a>
    </div>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b border-gray-600 text-gray-800 font-medium">
            Users List
            <div class="flex items-center justify-end py-5">
                <!-- Dropdown menu -->
                <div class="">
                    <label for="status"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Show deleted:</label>

                    <select id="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <option selected>Choose</option>
                        <option value="saab">Yes</option>
                        <option value="opel">No</option>
                    </select>
                </div>
            </div>
        </div>

        <x-delete-modal/>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    First name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    Admin
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
