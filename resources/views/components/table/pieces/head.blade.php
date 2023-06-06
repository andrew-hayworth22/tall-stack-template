@props(['isFirst' => false])
<th {{ $attributes->merge(['class' => ($isFirst ? 'py-3.5 pl-4 pr-3 sm:pl-6 ' : 'px-3 py-3.5 ') . 'text-left text-sm font-semibold text-gray-900 dark:text-neutral-100']) }}
    scope="col">
    {{ $slot }}
</th>
