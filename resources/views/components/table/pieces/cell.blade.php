@props(['isFirst' => false])
<td {{ $attributes->merge(['class' => ($isFirst ? 'pl-4 pr-3 sm:pl-6 ' : 'px-3 ') . 'whitespace-nowrap py-4']) }}>
    {{ $slot }}
</td>
