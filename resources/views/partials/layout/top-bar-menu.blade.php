<x-layout.navigation-bar-menu-item :href="route('dashboard')" :isActive="request()->is('dashboard')">Dashboard</x-layout.navigation-bar-menu-item>

<x-layout.navigation-bar-menu-item :isActive="request()->is('team')">Team</x-layout.navigation-bar-menu-item>

<x-layout.navigation-bar-menu-item :isActive="request()->is('projects')">Projects</x-layout.navigation-bar-menu-item>

<x-layout.navigation-bar-menu-item :isActive="request()->is('calendar')">Calendar</x-layout.navigation-bar-menu-item>
