@props(['model'])
<select {{ $attributes->merge(['class' => 'block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 dark:text-gray-100 dark:bg-gray-900 ring-1 ring-inset ring-gray-300 dark:ring-gray-800 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6']) }}
        wire:model.defer="{{ $model }}">
    {{ $slot }}
</select>
