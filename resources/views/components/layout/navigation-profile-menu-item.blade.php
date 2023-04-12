@props(['isActive' => false])
<a {{ $attributes->merge([
    'href' => '#',
    'class' => ($isActive ? 'bg-gray-100 dark:bg-gray-500 text-gray-600 dark:text-gray-200' : 'text-gray-700 dark:text-gray-300') . ' block px-4 py-2 text-sm']) }}
    role="menuitem"
    tabindex="-1">
    {{ $slot }}
</a>
