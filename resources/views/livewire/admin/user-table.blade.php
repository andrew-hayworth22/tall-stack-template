<div>
    <x-table.standard>
        @section('header')
            <x-table.pieces.head is-first="true">Name</x-table.pieces.head>
            <x-table.pieces.head>Email</x-table.pieces.head>
            <x-table.pieces.head>Roles</x-table.pieces.head>
            <x-table.pieces.head is-empty="true">Edit</x-table.pieces.head>
        @endsection

        @section('rows')
            @foreach($users as $user)
                <tr>
                    <x-table.pieces.cell is-first="true" class="text-sm">
                        {{ $user->name }}
                    </x-table.pieces.cell>

                    <x-table.pieces.cell class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $user->email }}
                    </x-table.pieces.cell>

                    <x-table.pieces.cell class="text-sm">
                        @foreach($user->getRoleNames() as $role)
                            {{ $role . ((!$loop->last) ? ',' : '') }}
                        @endforeach
                    </x-table.pieces.cell>

                    <x-table.pieces.cell class="text-sm relative text-right">
                        <x-buttons.primary-base x-data="{}" x-on:click="window.livewire.emitTo('modals.user-modal', 'show', {{ $user->id }})">
                            Edit <span class="sr-only">, {{ $user->name }}</span>
                        </x-buttons.primary-base>
                    </x-table.pieces.cell>
                </tr>
            @endforeach
        @endsection
    </x-table.standard>
</div>
