@props(['isActive' => false])
<a {{ $attributes->merge([
    'href' => '#',
    'class' => ($isActive ? 'border-indigo-500 dark:border-indigo-300 text-gray-900 dark:text-gray-300' : 'border-transparent text-gray-500 dark:text-gray-400 hover:border-gray-300 hover:text-gray-700') . ' inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium',
    'aria-current' => 'page'])
     }}>
    {{ $slot }}
</a>
