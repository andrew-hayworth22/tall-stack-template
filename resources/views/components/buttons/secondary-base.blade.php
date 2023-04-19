<button {{ $attributes->merge(['type' => 'button', 'class' => 'rounded-md bg-white dark:bg-white/10 px-3 py-2 text-sm font-semibold text-gray-900 dark:text-white shadow-sm ring-1 dark:ring-0 ring-inset ring-gray-300 dark:ring-white hover:bg-gray-50 dark:hover:bg-white/20']) }}>
    {{ $slot }}
</button>
