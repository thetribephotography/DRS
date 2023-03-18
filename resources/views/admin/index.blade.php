<x-admin-layout>

    <header>
        <nav class="bg-gl px-4 py-2.5">
            <div class="flex flex-wrap items-center justify-between">
                <h3 class="text-s6 font-medium">Dashboard</h3>

                {{-- Notification Dropdown --}}
                <button>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>

                </button>


                {{-- User Icon --}}
                <div class="relative" x-data="{ open: false }">
                    {{-- Button --}}
                    <button class="focus:ring-gray-300md:mr-0 mx-3 flex rounded-full bg-gray-800 text-sm focus:ring-4"
                        type="button" @click="open=!open">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>

                    {{-- Panel --}}
                    <div class="absolute right-2 mt-2 w-28 rounded border border-black bg-gray-500 p-2" x-show="open"
                        @click.outside="open=!open">
                        <div>
                            <a classs="block w-full" href="">Action 1</a>
                            <a classs="block w-full" href="">Action 2</a>
                        </div>
                        <div class="border-t border-black">
                            <a href=" classs="block w-full">Log Out</a>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </nav>
    </header>



</x-admin-layout>
