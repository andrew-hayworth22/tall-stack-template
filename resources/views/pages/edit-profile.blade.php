<x-app-layout>
    <x-slot name="header">
        Profile
    </x-slot>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="space-y-6">
            <x-card>
                <div class="max-w-xl">
                    @livewire('profile.update-profile-information')
                </div>
            </x-card>

            <x-card>
                <div class="max-w-xl">
                    @livewire('profile.update-password-form')
                </div>
            </x-card>

            <x-card>
                <div class="max-w-xl">
                    @livewire('profile.delete-user-form')
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
