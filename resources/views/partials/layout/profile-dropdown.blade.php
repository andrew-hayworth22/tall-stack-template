<div class="hidden sm:ml-6 sm:flex sm:items-center"
     x-data="{ showProfileDropdown: false }">
    <!-- Profile dropdown -->
    <div class="relative ml-3">
        <div>
            <button type="button"
                    class="flex max-w-xs p-1 items-center rounded-full text-sm text-gray-900 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    id="user-menu-button"
                    aria-expanded="false" aria-haspopup="true"
                    @click="showProfileDropdown = !showProfileDropdown">
                {{ auth()->user()->name }}
            </button>
        </div>

        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white dark:bg-gray-600 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
             role="menu"
             aria-orientation="vertical"
             aria-labelledby="user-menu-button"
             tabindex="-1"
             x-cloak x-show="showProfileDropdown"
             x-transition
             @click.away="showProfileDropdown = false">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <x-layout.navigation-profile-menu-item :isActive="request()->is('profile')" :href="route('profile.edit')">Your Profile</x-layout.navigation-profile-menu-item>

            <x-layout.navigation-profile-menu-item :isActive="request()->is('settings')">Settings</x-layout.navigation-profile-menu-item>

            <x-layout.logout-wrapper>
                <x-layout.navigation-profile-menu-item :href="route('logout')"
                                                       onclick="event.preventDefault(); this.closest('form').submit();">
                    Sign Out
                </x-layout.navigation-profile-menu-item>
            </x-layout.logout-wrapper>
        </div>
    </div>
</div>
