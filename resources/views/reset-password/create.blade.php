<x-unauthotized-layout>
    <div class="w-full flex flex-col justify-center items-center h-screen">
        <form action="{{ route('reset-password') }}" method="POST"
              class="bg-white shadow-2xl rounded border px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
            @csrf

            @if(session()->has('success'))
                <div
                    class="bg-green-400 py-2 px-4 text-center mb-4 font-medium text-white rounded">{{ session()->get('success') }}
                </div>
            @elseif(session()->has('error'))
                <div
                    class="bg-green-400 py-2 px-4 text-center mb-4 font-medium text-white rounded">{{ session()->get('error') }}
                </div>
            @endif

            <div class="mb-6">
                <a href="{{ route('login') }}" class="flex items-center">
                    <svg clip-rule="evenodd" fill-rule="evenodd" width="25" stroke-linejoin="round"
                         stroke-miterlimit="2"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m22 12.002c0-5.517-4.48-9.997-9.998-9.997-5.517 0-9.997 4.48-9.997 9.997 0 5.518 4.48 9.998 9.997 9.998 5.518 0 9.998-4.48 9.998-9.998zm-8.211-4.843c.141-.108.3-.157.456-.157.389 0 .755.306.755.749v8.501c0 .445-.367.75-.755.75-.157 0-.316-.05-.457-.159-1.554-1.203-4.199-3.252-5.498-4.258-.184-.142-.29-.36-.29-.592 0-.23.107-.449.291-.591z"
                            fill-rule="nonzero"/>
                    </svg>
                    <p class="ml-2 font-medium">Go back</p>
                </a>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="text" placeholder="E-Mail Address" name="email">
                @error('email')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</x-unauthotized-layout>
