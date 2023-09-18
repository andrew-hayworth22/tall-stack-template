@props(['isFirst' => false])
<td {{ $attributes->merge(['class' => $isFirst ? 'whitespace-nowrap py-4 pl-4 pr-3 sm:pl-6' : 'whitespace-nowrap px-3 py-4']) }}>
    {{ $slot }}
</td>
