<x-layout>
    <div class="mb-8">
        <a href="{{ route('clients.create') }}" class="bg-green-600 py-2 px-5 rounded text-white font-medium">Create
            client</a>
    </div>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b border-gray-600 text-gray-800 font-medium">
            Clients list
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
                    Company
                </th>
                <th scope="col" class="px-6 py-3">
                    VAT
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Feest PLC
                </th>
                <td class="px-6 py-4">
                    50231
                </td>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, beatae.
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
