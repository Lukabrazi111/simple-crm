<x-layout>
    <div class="relative overflow-x-auto">
        <div class="bg-white py-3 px-5 border-b mb-2 text-gray-800 font-medium">
            <p class="border-b mb-2 pb-2 text-xl">Dashboard</p>
            <p>{{ auth()->user()->full_name }} Logged In!</p>
        </div>
    </div>
</x-layout>
