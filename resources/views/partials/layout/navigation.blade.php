@props(['activeItem'])
<nav class="border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800"
     x-data="{ isMobileMenuOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">

                {{--                <div class="flex flex-shrink-0 items-center">--}}
                {{--                    <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">--}}
                {{--                    <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">--}}
                {{--                </div>--}}

                <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                    @include('partials.layout.top-bar-menu')
                </div>
            </div>

            @include('partials.layout.profile-dropdown')

            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                        class="inline-flex items-center justify-center rounded-md bg-white dark:bg-gray-600 p-2 text-gray-400 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-500 hover:text-gray-500 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        aria-controls="mobile-menu" aria-expanded="false"
                        @click="isMobileMenuOpen = !isMobileMenuOpen">
                    <span class="sr-only">Open main menu</span>

                    <svg x-bind:class="(isMobileMenuOpen ? 'hidden' : 'block') + ' h-6 w-6'" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>

                    <svg x-bind:class="(isMobileMenuOpen ? 'block' : 'hidden') + ' h-6 w-6'" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="sm:hidden" id="mobile-menu"
         x-cloak x-show="isMobileMenuOpen">
        <div class="space-y-1 pb-3 pt-2">
            @include('partials.layout.mobile-menu')
        </div>
        <div class="border-t border-gray-200 pb-3 pt-3">
            <div class="space-y-1">
                @include('partials.layout.mobile-profile-menu')
            </div>
        </div>
    </div>
</nav>
