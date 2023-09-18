@props(['isFirst' => false, 'isEmpty' => false])
<th scope="col" class="{{ $isEmpty ? 'relative py-3.5 pl-3 pr-4 sm:pr-6' : ('text-left text-sm font-semibold text-gray-900 dark:text-gray-100 ' . ($isFirst ? 'py-3.5 pl-4 pr-3 sm:pl-6' : 'px-3 py-3.5')) }}">
    @if($isEmpty)
        <span class="sr-only">{{ $slot }}</span>
    @else
        {{ $slot }}
    @endif
</th>
