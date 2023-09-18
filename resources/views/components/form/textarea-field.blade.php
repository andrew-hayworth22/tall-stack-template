@props(['model', 'label'])
<div {{ $attributes->merge()->only('class') }}>
    <x-input.label :for="$model"> {{ $label }} </x-input.label>
    <x-input.textarea wire:model.defer="{{$model}}" :id="$model" :name="$label" class="mt-1 block w-full" {{  $attributes->merge()->except('class') }}/>
    <x-input.error class="mt-2" :messages="$errors->get($model)" />
</div>
