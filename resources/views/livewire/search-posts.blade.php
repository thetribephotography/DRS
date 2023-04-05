<div>
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">
            <div
                class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                <div class="flex items-center justify-between px-4">
                    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                    <button
                        class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400"
                        type="button">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Filters -->
                <form class="mt-4 border-t border-gray-200">
                    <h3 class="sr-only">Categories</h3>
                    <ul class="px-2 py-3 font-medium text-gray-900" role="list">
                        <li>
                            <a class="block px-2 py-3" href="#">Totes</a>
                        </li>

                        <li>
                            <a class="block px-2 py-3" href="#">Backpacks</a>
                        </li>

                        <li>
                            <a class="block px-2 py-3" href="#">Travel Bags</a>
                        </li>

                        <li>
                            <a class="block px-2 py-3" href="#">Hip Bags</a>
                        </li>

                        <li>
                            <a class="block px-2 py-3" href="#">Laptop Sleeves</a>
                        </li>
                    </ul>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button" aria-controls="filter-section-mobile-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Color</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-mobile-0">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-color-0" name="color[]" type="checkbox" value="white">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-color-0">White</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-color-1" name="color[]" type="checkbox" value="beige">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-color-1">Beige</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-color-2" name="color[]" type="checkbox" value="blue"
                                        checked>
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-color-2">Blue</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-color-3" name="color[]" type="checkbox" value="brown">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-color-3">Brown</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-color-4" name="color[]" type="checkbox" value="green">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-color-4">Green</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-color-5" name="color[]" type="checkbox" value="purple">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-color-5">Purple</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button" aria-controls="filter-section-mobile-1" aria-expanded="false">
                                <span class="font-medium text-gray-900">Category</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-mobile-1">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-category-0" name="category[]" type="checkbox"
                                        value="new-arrivals">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-category-0">New Arrivals</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-category-1" name="category[]" type="checkbox"
                                        value="sale">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-category-1">Sale</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-category-2" name="category[]" type="checkbox"
                                        value="travel" checked>
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-category-2">Travel</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-category-3" name="category[]" type="checkbox"
                                        value="organization">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-category-3">Organization</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-category-4" name="category[]" type="checkbox"
                                        value="accessories">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-category-4">Accessories</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button" aria-controls="filter-section-mobile-2" aria-expanded="false">
                                <span class="font-medium text-gray-900">Size</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-mobile-2">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-size-0" name="size[]" type="checkbox" value="2l">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-size-0">2L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-size-1" name="size[]" type="checkbox" value="6l">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-size-1">6L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-size-2" name="size[]" type="checkbox" value="12l">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-size-2">12L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-size-3" name="size[]" type="checkbox" value="18l">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-size-3">18L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-size-4" name="size[]" type="checkbox" value="20l">
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-size-4">20L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-mobile-size-5" name="size[]" type="checkbox" value="40l"
                                        checked>
                                    <label class="ml-3 min-w-0 flex-1 text-gray-500"
                                        for="filter-mobile-size-5">40L</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <main class="ml-[5rem] max-w-7xl px-4 sm:px-6">
        <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-4">
            <h1 class="text-2xl font-bold tracking-tight text-black">Search Results</h1>


            <div class="flex items-center">
                <div class="relative inline-block text-left" x-data="{ open: false }">
                    <div>
                        <button
                            class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                            id="menu-button" type="button" aria-expanded="false" aria-haspopup="true"
                            x-show="true" @click="open = !open">
                            Sort
                            <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                        tabindex="-1">
                        <div class="py-1" role="none" x-show="open">
                            <a class="block px-4 py-2 text-sm font-medium text-gray-900" id="menu-item-0"
                                href="#" role="menuitem" tabindex="-1">Most Popular</a>

                            <a class="block px-4 py-2 text-sm text-gray-500" id="menu-item-1" href="#"
                                role="menuitem" tabindex="-1">Best Rating</a>

                            <a class="block px-4 py-2 text-sm text-gray-500" id="menu-item-2" href="#"
                                role="menuitem" tabindex="-1">Newest</a>

                            <a class="block px-4 py-2 text-sm text-gray-500" id="menu-item-3" href="#"
                                role="menuitem" tabindex="-1">Price: Low to High</a>

                            <a class="block px-4 py-2 text-sm text-gray-500" id="menu-item-4" href="#"
                                role="menuitem" tabindex="-1">Price: High to Low</a>
                        </div>
                    </div>
                </div>

                <button class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7" type="button">
                    <span class="sr-only">View grid</span>
                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden" type="button">
                    <span class="sr-only">Filters</span>
                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <section class="pb-24 pt-6">
            <h2 class="sr-only" id="products-heading">Products</h2>

            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                <!-- Filters -->
                <div class="hidden lg:block">
                    <div class="border-b border-gray-200 py-6" x-data="{ open: false }">
                        <h3 class="-mx-2 -my-3 flow-root text-s8">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button">
                                <span class="font-medium text-gray-900">Upload type</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="!open" @click="open = !open">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="open" @click="open = !open">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" x-show="open">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-cmblue focus:ring-cmblue"
                                        type="checkbox" value="1" wire:model="SelectedType">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-0">Article</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-cmblue focus:ring-cmblue"
                                        type="checkbox" value="2" wire:model="SelectedType">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-1">Software</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-cmblue focus:ring-cmblue"
                                        type="checkbox" value="3" wire:model="SelectedType">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-1">Dataset</label>
                                </div>

                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-cmblue focus:ring-cmblue"
                                        id="filter-size-3" type="checkbox" value="4" wire:model="SelectedType">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-3">Workflow</label>
                                </div>

                                {{-- Others temporarily off --}}
                                <div class="flex items-center">
                                    <input class="h-4 w-4 rounded border-gray-300 text-cmblue focus:ring-cmblue"
                                        type="checkbox" value="5">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-4">Others</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 py-6" x-data="{ open: false }">
                        <h3 class="-mx-2 -my-3 flow-root text-s8">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button">
                                <span class="font-medium text-gray-900">Access Rights</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="!open" @click="open = !open">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="open" @click="open = !open">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" x-show="open">
                            <div class="space-y-4">

                                <div class="flex items-center">
                                    <input class="focclblueblue h-4 w-4 rounded border-gray-300 text-clblue"
                                        name=categories[]" type="checkbox" value="1"
                                        wire:model="SelectedAccess">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-0">Public</label>
                                </div>
                                <div class="flex items-center">
                                    <input class="focclblueblue h-4 w-4 rounded border-gray-300 text-clblue"
                                        name=categories[]" type="checkbox" value="2"
                                        wire:model="SelectedAccess">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-0">Private</label>
                                </div>
                                <div class="flex items-center">
                                    <input class="focclblueblue h-4 w-4 rounded border-gray-300 text-clblue"
                                        name=categories[]" type="checkbox" value="3"
                                        wire:model="SelectedAccess">
                                    <label class="ml-3 text-s8 text-gray-600" for="filter-size-0">Group</label>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 py-6" x-data="{ open: false }">
                        <h3 class="-mx-2 -my-3 flow-root text-s8">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button">
                                <span class="font-medium text-gray-900">Categories</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="!open" @click="open = !open">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="open" @click="open = !open">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" x-show="open">
                            <div class="space-y-4">
                                @foreach ($categories as $category)
                                    <div class="flex items-center">
                                        <input class="focclblueblue h-4 w-4 rounded border-gray-300 text-clblue"
                                            name=categories[]" type="checkbox" value="{{ $category->slug }}"
                                            wire:model="SelectedCategories">
                                        <label class="ml-3 text-s8 text-gray-600"
                                            for="filter-size-0">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 py-6" x-data="{ open: false }">
                        <h3 class="-mx-2 -my-3 flow-root text-s8">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button">
                                <span class="font-medium text-gray-900">Tags</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="!open" @click="open = !open">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="open" @click="open = !open">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" x-show="open">
                            <div class="space-y-4">

                                @foreach ($tags as $tag)
                                    <div class="flex items-center">
                                        <input class="h-4 w-4 rounded border-gray-300 text-clblue focus:ring-cmblue"
                                            type="checkbox" value="{{ $tag->slug }}" wire:model="SelectedTags">
                                        <label class="ml-3 text-s8 text-gray-600"
                                            for="filter-size-0">{{ $tag->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 py-6" x-data="{ open: false }">
                        <h3 class="-mx-2 -my-3 flow-root text-s8">
                            <!-- Expand/collapse section button -->
                            <button
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                type="button">
                                <span class="font-medium text-gray-900">Date Published</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="!open" @click="open = !open">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                                        x-show="open" @click="open = !open">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" x-show="open">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        name="size[]" type="checkbox" value="2l">
                                    <label class="ml-3 text-s8 text-gray-600">2L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        name="size[]" type="checkbox" value="6l">
                                    <label class="ml-3 text-s8 text-gray-600">6L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        name="size[]" type="checkbox" value="12l">
                                    <label class="ml-3 text-s8 text-gray-600">12L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        id="filter-size-3" name="size[]" type="checkbox" value="18l">
                                    <label class="ml-3 text-s8 text-gray-600">18L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        name="size[]" type="checkbox" value="20l">
                                    <label class="ml-3 text-s8 text-gray-600">20L</label>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        name="size[]" type="checkbox" value="40l" checked>
                                    <label class="ml-3 text-s8 text-gray-600">40L</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product grid -->
                <div class="lg:col-span-3 lg:pt-4">
                    <!-- Your content -->
                    {{-- Search bar --}}
                    <div class="relative mb-6 w-full">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-clblue focus:ring-clblue"
                            type="text" placeholder="Search" wire:model.debounce.2000ms="search"
                            wire:keydown.enter="filter">
                    </div>
                    {{-- End search bar --}}

                    <div wire:loading>
                        Processing Payment...
                    </div>

                    @foreach ($posts as $upload)
                        {{-- Main --}}
                        <div class="mb-8 w-full font-inter md:w-[24rem] lg:w-[60rem]">
                            <div class="flex flex-col px-2 lg:flex-row">
                                @if ($upload->topic_id == 1)
                                    {{-- For image --}}
                                    <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_article.png') }}" alt="Article">
                                    </div>
                                @elseif ($upload->topic_id == 2)
                                    {{-- For image --}}
                                    <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_software.png') }}" alt="Software">
                                    </div>
                                @elseif ($upload->topic_id == 3)
                                    {{-- For image --}}
                                    <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_dataset.png') }}" alt="Dataset">
                                    </div>
                                @elseif($upload->topic_id == 4)
                                    {{-- For image --}}
                                    <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_workflow.png') }}" alt="Workflow">
                                    </div>
                                @endif

                                {{-- For text --}}
                                <div class="my-2 flex flex-col md:mt-0 lg:ml-4">
                                    {{-- ForTop Part --}}
                                    <div class="flex justify-between lg:justify-start">
                                        @if ($upload->access_id == 1)
                                            {{-- Visibility --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <p class="ml-1">Public</p>
                                            </div>
                                        @elseif($upload->access_id == 2)
                                            {{-- Visibility --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <p class="ml-1">Private</p>
                                            </div>
                                        @elseif($upload->access_id == 3)
                                            {{-- Visibility --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <p class="ml-1">Group</p>
                                            </div>
                                        @endif
                                        @if ($upload->topic_id == 1)
                                            {{-- Type --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                </svg>

                                                <p class="ml-1">Article</p>
                                            </div>
                                        @elseif ($upload->topic_id == 2)
                                            {{-- Type --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                </svg>

                                                <p class="ml-1">Software</p>
                                            </div>
                                        @elseif ($upload->topic_id == 3)
                                            {{-- Type --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                </svg>

                                                <p class="ml-1">Dataset</p>
                                            </div>
                                        @elseif($upload->topic_id == 4)
                                            {{-- Type --}}
                                            <div class="mr-4 flex text-s9 text-[#6F737A]">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                </svg>

                                                <p class="ml-1">Workflow</p>
                                            </div>
                                        @endif

                                        {{-- Size --}}
                                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                                            <svg class="" width="13" height="13" viewBox="0 0 13 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="13" height="13" fill="white" />
                                                <path
                                                    d="M4.875 6.5V7.58333M3.25 6.5V8.125M6.5 6.5V8.125M9.75 6.5V8.125M8.125 6.5V7.58333M1.625 1.625V3.79167M1.625 2.70833H11.375M11.375 1.625V3.79167M10.7656 6.5C11.102 6.5 11.375 6.77733 11.375 7.11913V10.2142C11.375 10.556 11.102 10.8333 10.7656 10.8333H2.16667C2.02301 10.8333 1.88523 10.7763 1.78365 10.6747C1.68207 10.5731 1.625 10.4353 1.625 10.2917V7.11913C1.625 6.77733 1.898 6.5 2.23438 6.5H10.7656Z"
                                                    stroke="#6F737A" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <p class="ml-1">{{ round($upload->file_size / 1048576, 2) }} MB</p>
                                        </div>
                                        {{-- Date --}}
                                        <div class="flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                            </svg>
                                            <p class="ml-1">{{ $upload->created_at->format('F d, Y') }}</p>
                                        </div>
                                    </div>
                                    {{-- End --}}
                                    <div class="mt-1">
                                        <a class="text-decoration-none hover:underline"
                                            href="/upload/public/{{ $upload->slug }}">
                                            <h3 class="text-s7 font-semibold text-cdblack md:font-regular">
                                                {{ $upload->title }}
                                            </h3>
                                        </a>
                                        <p class="mt-1 font-light text-[#6F737A]">{{ $upload->description }}</p>
                                    </div>
                                    <div class="mt-4 flex md:mt-2">
                                        <img class="h-4 w-4 rounded-full"
                                            src="{{ $upload->users->profile_picture ? asset('storage/' . $upload->users->profile_picture) : asset('images/user.jpeg') }}"
                                            alt="">
                                        <a class="ml-2 text-s9 font-regular text-[#6F737A] hover:text-cmblue hover:underline"
                                            href="{{ route('user.profile.public', $upload->users->_id) }}">
                                            <p>{{ $upload->users->name }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 h-[1px] w-full bg-[#C3C2C2]"></div>
                        </div>
                        {{-- End --}}
                    @endforeach


                </div>
            </div>
        </section>
    </main>


</div>
