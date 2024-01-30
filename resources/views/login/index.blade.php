<x-unauthotized-layout>
    <div class="w-full flex flex-col justify-center items-center h-screen">
        <form action="{{ route('auth.login') }}" method="POST"
              class="bg-white shadow-2xl rounded border px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
            @csrf
            @if(session()->has('error'))
                <div
                    class="bg-red-400 py-1 text-center mb-4 font-medium text-white">{{ session()->get('error') }}
                </div>
            @elseif(session()->has('success'))
                <div
                    class="bg-green-400 py-1 text-center mb-4 font-medium text-white">{{ session()->get('success') }}
                </div>
            @endif
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 @error('email') mb-3 @enderror leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="text" placeholder="E-Mail Address" name="email">
                @error('email')
                <p class="text-red-500 text-xs italic mb-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="*************" name="password">
                @error('password')
                <p class="text-red-500 text-xs italic mb-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center mb-4">
                <input id="remember-checkbox" type="checkbox" value="" name="remember_checked"
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600">
                <label for="remember-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                    checkbox</label>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                   href="{{ route('reset-password.create') }}">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</x-unauthotized-layout>
