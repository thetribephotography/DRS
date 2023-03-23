    <footer class="mt-20 bg-cmblue">
        <div class="container mx-auto w-full p-4 md:px-6 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <x-application-logo class="text-white" />
                <ul class="mb-6 flex flex-wrap items-center text-sm text-white sm:mb-0">
                    <li>
                        <a class="mr-4 hover:underline md:mr-6" href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="mr-4 hover:underline md:mr-6" href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="mr-4 hover:underline md:mr-6" href="#">Licensing</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-white sm:text-center">©<a class="hover:underline"
                    href="/">SoftwareRepoHub™</a>. All Rights Reserved.</span>
        </div>
    </footer>
