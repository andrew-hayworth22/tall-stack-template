@props(['isActive' => false])
<a {{ $attributes->merge([
    'href' => '#',
    'class' => ($isActive ? 'border-indigo-500 dark:border-indigo-200 bg-indigo-50 dark:bg-indigo-700 text-indigo-700 dark:text-indigo-50' : 'border-transparent text-gray-600 dark:text-gray-300 hover:border-gray-300 dark:hover:border-gray-400 hover:bg-gray-50 dark:hover:bg-gray-200 hover:text-gray-800') . ' block border-l-4 py-2 pl-3 pr-4 text-base font-medium',
    'aria-current' => 'page'])
    }}>
    {{ $slot }}
</a>
