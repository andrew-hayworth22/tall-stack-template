<div>
    <x-modal wire:model="show" title="User Modal">
        <form wire:submit="save">
            <x-form.text-field model="user.name" label="Name"></x-form.text-field>
            <x-form.text-field class="mt-2" model="user.email" label="Email" type="email"></x-form.text-field>

            <div class="flex gap-4">
                <x-form.select-field class="mt-2 flex-grow" model="selectedRole" label="Pick Role">
                    <option>Select role...</option>
                    @foreach($roles as $role)
                        @if($role->name != "User")
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endif
                    @endforeach
                </x-form.select-field>
                <div class="flex items-end">
                    <x-buttons.secondary-base wire:click="addRole" class="h-9">Add Role</x-buttons.secondary-base>
                </div>
            </div>

            <div class="mt-2 w-1/2">
                @if($user != null && $user->exists)
                    @foreach($user->roles as $userRole)
                        <div class="flex justify-between items-center py-2 pl-6 pr-3 mb-1 rounded-full bg-gray-200 dark:bg-gray-800 text-sm">
                            {{ $userRole->name }}
                            @if($userRole->name != 'User')
                                <x-buttons.icon-ghost wire:click="removeRole({{ $userRole->id }})">
                                    <i class="fa-solid text-sm fa-times"></i>
                                </x-buttons.icon-ghost>
                            @else
                                <x-buttons.icon-ghost disabled>
                                    <i class="fa-solid text-sm fa-times"></i>
                                </x-buttons.icon-ghost>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="mt-5 sm:mt-4 flex sm:flex-row flex-col-reverse gap-2">
                <x-buttons.secondary-base @click="show=false">Close</x-buttons.secondary-base>
                @if($user != null && $user->exists)
                    <x-buttons.danger-base wire:click="delete" type="button">Delete</x-buttons.danger-base>
                @endif
                <x-buttons.primary-base type="submit">Save</x-buttons.primary-base>
            </div>
        </form>
    </x-modal>
</div>
