<div class="mb-5">
    <label for="{{ $idTag }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>

    <select id="{{ $idTag }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        <option selected>{{ $selected }}</option>
        @foreach($data as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
