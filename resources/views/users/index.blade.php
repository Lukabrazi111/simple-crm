<x-layout>
    <div class="mb-8">
        <a href="{{ route('users.create') }}" class="bg-green-600 py-2 px-5 rounded text-white font-medium">Create
            user</a>
    </div>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b border-gray-600 text-gray-800 font-medium">
            Users list
            <div class="flex items-center justify-end py-5">
                <x-dropdown.option
                    :id-tag="'status'"
                    :label="'Show deleted:'"
                    :selected="'Choose'"
                    :data="['Yes', 'No']"
                />
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
            @foreach($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->first_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->last_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        user
                    </td>
                    <td class="px-6 py-4">
                        <div>
                            <div class="space-x-2">
                                <a
                                    href="{{ route('users.edit', $user->id) }}"
                                    class="bg-blue-600 text-white px-6 py-2 rounded font-medium hover:bg-blue-700">Edit
                                </a>
                                {{-- TODO: add delete user functionality --}}
                                <a
                                    href="#"
                                    id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                    class="bg-red-600 text-white px-6 py-2 rounded font-medium hover:bg-red-700">Delete
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</x-layout>
