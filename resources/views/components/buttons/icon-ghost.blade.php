<button type="button"
        {{ $attributes->class(['w-9 h-9 transition-colors rounded-full p-1 text-white shadow-sm hover:bg-indigo-500 disabled:hover:bg-transparent disabled:opacity-25 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}>
    {{ $slot }}
</button>
