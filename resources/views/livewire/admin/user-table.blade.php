<div>
    <x-table.standard>
        @section('header')
            <x-table.pieces.head is-first="true">Name</x-table.pieces.head>
            <x-table.pieces.head>Email</x-table.pieces.head>
            <x-table.pieces.head>Roles</x-table.pieces.head>
            <x-table.pieces.head>
                <span class="sr-only">Edit</span>
            </x-table.pieces.head>
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
                            {{ $role }}
                        @endforeach
                    </x-table.pieces.cell>

                    <x-table.pieces.cell class="text-sm">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                    </x-table.pieces.cell>
                </tr>
            @endforeach
        @endsection
    </x-table.standard>
</div>
