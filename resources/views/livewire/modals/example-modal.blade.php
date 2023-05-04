<div>
    <x-modal wire:model="show" title="Example Modal">
        {{ $text }}

        @section('buttons')
            <x-buttons.secondary-base @click="show=false">Close</x-buttons.secondary-base>
        @endsection
    </x-modal>
</div>
