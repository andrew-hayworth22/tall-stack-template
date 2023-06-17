<div>
    <x-modal wire:model="show" title="User Modal">
        <x-form.text-field model="user.name" label="Name"></x-form.text-field>
        <x-form.text-field class="mt-2" model="user.email" label="Email" type="email"></x-form.text-field>
        @section('buttons')
            <x-buttons.secondary-base @click="show=false">Close</x-buttons.secondary-base>
            @if($user != null && $user->exists)
                <x-buttons.danger-base wire:click="delete" type="button">Delete</x-buttons.danger-base>
            @endif
            <x-buttons.primary-base wire:click="save" type="button">Save</x-buttons.primary-base>
        @endsection
    </x-modal>
</div>
