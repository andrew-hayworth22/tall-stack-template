<x-app-layout header="Dashboard" activeItem="0">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <x-buttons.primary-base x-data="{}" x-on:click="window.livewire.emitTo('modals.example-modal', 'show', 'This was passed in via the event!')">
            Show Example Modal
        </x-buttons.primary-base>
        <livewire:modals.example-modal/>
    </div>
</x-app-layout>
