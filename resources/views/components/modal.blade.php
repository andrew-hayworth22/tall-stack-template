@props(['title'])

<div class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40 transition-opacity"
     x-data="{ show: @entangle($attributes->wire('model')).defer }"
     x-on:keydown.escape.window="show = false"
     x-show="show"
>

    <div x-show="show" x-cloak
         class="bg-gray-500 dark:bg-gray-900 fixed inset-0 bg-opacity-75 dark:bg-opacity-75 transition-opacity"
         x-on:click="show = false"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center text-center sm:items-center p-0 sm:p-4">
            <div class="relative transform overflow-hidden rounded-lg bg-white dark:bg-gray-700 px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-lg sm:p-6"
                 x-show="show" x-cloak
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 @mousedown.away="show=false"
                 x-trap="show">

                <div class="flex justify-between">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900 dark:text-gray-100" id="modal-title">{{ $title }}</h3>

                    <button type="button" class="rounded-md bg-white dark:bg-gray-600 text-gray-400 dark:text-white hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" @click="show=false">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mt-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
