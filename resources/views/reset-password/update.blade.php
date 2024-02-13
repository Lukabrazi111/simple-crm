<x-unauthotized-layout>
    <div class="w-full flex flex-col justify-center items-center h-screen">
        <form action="{{ route('reset-password', $token) }}" method="POST"
              class="bg-white shadow-2xl rounded border px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
            @csrf

            @if(session()->has('success'))
                <div
                    class="bg-green-400 py-2 px-4 text-center mb-4 font-medium text-white rounded">{{ session()->get('success') }}
                </div>
            @elseif(session()->has('error'))
                <div
                    class="bg-red-400 py-2 px-4 text-center mb-4 font-medium text-white rounded">{{ session()->get('error') }}
                </div>
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="Password" name="password">
                @error('password')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                    Password Confirm
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password_confirmation" type="password" placeholder="Password Confirmation"
                    name="password_confirmation">
                @error('password_confirmation')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update password
                </button>
            </div>
        </form>
    </div>
</x-unauthotized-layout>
