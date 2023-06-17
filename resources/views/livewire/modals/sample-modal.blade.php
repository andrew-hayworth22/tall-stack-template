<div>
    <x-modal wire:model="show" title="Sample Modal">
        <x-form.text-field model="sample.name" label="Name"></x-form.text-field>
        <x-form.textarea-field class="mt-2" model="sample.description" label="Description"></x-form.textarea-field>

        @section('buttons')
            <x-buttons.secondary-base @click="show=false">Close</x-buttons.secondary-base>
            <x-buttons.primary-base wire:click="save" type="button">Save</x-buttons.primary-base>
        @endsection
    </x-modal>
</div>
