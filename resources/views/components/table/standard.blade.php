<div {{ $attributes->class(['flow-root']) }}>
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50 dark:bg-gray-600">
                        <tr>
                            @yield('header')
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white dark:bg-gray-700">
                        @yield('rows')

                        <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
