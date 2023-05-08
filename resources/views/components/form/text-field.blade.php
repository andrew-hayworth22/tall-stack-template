@props(['model', 'label'])
<div>
    <x-input.label :for="$model"> {{ $label }} </x-input.label>
    <x-input.text wire:model.defer="{{$model}}" :id="$model" :name="$label" class="mt-1 block w-full" {{  $attributes->merge(['type' => 'text']) }} />
    <x-input.error class="mt-2" :messages="$errors->get($model)" />
</div>
