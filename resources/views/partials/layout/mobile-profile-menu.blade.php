<x-layout.navigation-mobile-menu-item :isActive="request()->is('profile')" :href="route('profile.edit')">Your Profile</x-layout.navigation-mobile-menu-item>

<x-layout.navigation-mobile-menu-item :isActive="request()->is('settings')">Settings</x-layout.navigation-mobile-menu-item>

<x-layout.logout-wrapper>
    <x-layout.navigation-mobile-menu-item :href="route('logout')"
                                          onclick="event.preventDefault(); this.closest('form').submit();">
        Sign Out
    </x-layout.navigation-mobile-menu-item>
</x-layout.logout-wrapper>
