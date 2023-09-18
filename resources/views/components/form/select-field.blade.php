@props(['model', 'label'])
<div {{ $attributes->merge()->only('class') }}>
    <x-input.label :for="$model">{{ $label }}</x-input.label>
    <x-input.select model="{{ $model }}" :id="$model" :name="$label" class="mt-1 block w-full">
        {{ $slot }}
    </x-input.select>
    <x-input.error class="mt-2" :messages="$errors->get($model)" />
</div>
