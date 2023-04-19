<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form wire:submit.prevent="updatePassword" class="mt-6 space-y-6">
        <div>
            <x-form.text-field model="currentPassword" label="Current Password" type="password" autocomplete="current-password"/>
        </div>

        <div>
            <x-form.text-field model="newPassword" label="New Password" type="password" autocomplete="new-password"/>
        </div>

        <div>
            <x-form.text-field model="newPassword_confirmation" label="Confirm Password" type="password" autocomplete="new-password"/>
        </div>

        <div class="flex items-center gap-4">
            <x-buttons.primary-base>Save</x-buttons.primary-base>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                > Saved. </p>
            @endif
        </div>
    </form>
</section>
