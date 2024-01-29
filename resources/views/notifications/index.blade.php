<x-layout>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b mb-2 text-gray-800 font-medium">
            <p class="border-b mb-4 pb-2 text-xl">Notifications</p>
            <div class="mb-8">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')

                    <button type="submit" class="bg-green-600 py-2 px-5 rounded text-white font-medium">Mark all as
                        read
                    </button>
                </form>
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Sent at
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Task assigned
                </th>
                <td class="px-6 py-4">
                    Jane Lopez
                </td>
                <td class="px-6 py-4">
                    1 hour ago
                </td>
                <td class="px-6 py-4">
                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')

                        <button type="submit" class="bg-blue-600 py-2 px-5 rounded text-white font-medium">Mark as
                            read
                        </button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-layout>
