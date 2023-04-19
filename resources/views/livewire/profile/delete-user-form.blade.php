<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Delete Account
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <x-buttons.danger-base
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Delete Account</x-buttons.danger-base>

{{--    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>--}}
{{--        <form wire:submit.prevent="deleteUser" class="p-6">--}}
{{--            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">--}}
{{--                Are you sure you want to delete your account?--}}
{{--            </h2>--}}

{{--            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.--}}
{{--            </p>--}}

{{--            <div class="mt-6">--}}
{{--                <x-form.text-field model="password" label="Password" type="password" placeholder="Password"></x-form.text-field>--}}
{{--            </div>--}}

{{--            <div class="mt-6 flex justify-end">--}}
{{--                <x-buttons.secondary-base x-on:click="$dispatch('close')">--}}
{{--                    Cancel--}}
{{--                </x-buttons.secondary-base>--}}

{{--                <x-buttons.danger-base class="ml-3">--}}
{{--                    Delete Account--}}
{{--                </x-buttons.danger-base>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-modal>--}}
</section>
