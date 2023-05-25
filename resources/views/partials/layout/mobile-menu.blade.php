<x-layout.navigation-mobile-menu-item :href="route('dashboard')" :isActive="request()->is('dashboard')">Dashboard</x-layout.navigation-mobile-menu-item>

<x-layout.navigation-mobile-menu-item :isActive="request()->is('team')">Team</x-layout.navigation-mobile-menu-item>

<x-layout.navigation-mobile-menu-item :isActive="request()->is('projects')">Projects</x-layout.navigation-mobile-menu-item>

<x-layout.navigation-mobile-menu-item :isActive="request()->is('calendar')">Calendar</x-layout.navigation-mobile-menu-item>

@can('view admin screen')
    <x-layout.navigation-mobile-menu-item :href="route('admin')" :isActive="request()->is('admin')">Admin</x-layout.navigation-mobile-menu-item>
@endcan
