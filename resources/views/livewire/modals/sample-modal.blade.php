<div>
    <x-modal wire:model="show" title="Sample Modal">
        <form wire:submit.prevent="save">
            <x-form.text-field model="sample.name" label="Name" placeholder="Enter name..."></x-form.text-field>
            <x-form.textarea-field class="mt-2" model="sample.description" label="Description" placeholder="Enter description..."/>
            <x-form.select-field class="mt-2" model="sample.sample_type_id" label="Type">
                <option>Select type...</option>
                @foreach($types as $type)
                    <option value={{ $type->id }}>{{ $type->name }}</option>
                @endforeach
            </x-form.select-field>
            <div class="mt-5 sm:mt-4">
                <x-buttons.secondary-base @click="show=false">Close</x-buttons.secondary-base>
                <x-buttons.primary-base type="submit">Save</x-buttons.primary-base>
            </div>
        </form>
    </x-modal>
</div>
