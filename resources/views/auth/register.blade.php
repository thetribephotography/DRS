<x-guest-layout :title="$title">
    <section>
        <div class="items-center justify-center px-6 py-8 pl-[35rem] md:h-screen lg:pt-8">
            <a class="pl-[6rem] text-center text-2xl font-bold text-clblack" href="#">
                SoftwareRepoHub
            </a>
            <div class="w-full rounded-lg bg-white shadow sm:max-w-md md:mt-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1 class="text-gray-900 text-center text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Sign Up
                    </h1>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex">
                            <div class="w-1/2 pr-4">
                                <label class="mb-2 block text-sm text-s7 font-medium text-clblack" for="First Name">
                                    First Name</label>
                                <div>
                                    <input
                                        class="text-gray-900 block h-11 w-full rounded-lg border-2 border-gl p-2.5 text-s1 focus:border-cmblue sm:text-sm"
                                        id="first_name" name="fname" type="text" value="{{ old('fname') }}"
                                        placeholder="First Name" required="">
                                </div>

                            </div>
                            <div class="w-1/2 pl-4">
                                <label class="mb-2 block text-sm text-s7 font-medium text-clblack" for="last_name">
                                    Last Name</label>
                                <div>
                                    <input
                                        class="text-gray-900 block h-11 w-full rounded-lg border-2 border-gl p-2.5 text-s1 focus:border-cmblue sm:text-sm"
                                        id="last_name" name="lname" type="text" value="{{ old('lname') }}"
                                        placeholder="Last Name" required="">
                                </div>

                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm text-s7 font-medium text-clblack" for="email">
                                Email</label>
                            <div>
                                <input
                                    class="text-gray-900 block h-11 w-full rounded-lg border-2 border-gl p-2.5 px-12 text-s1 focus:border-cmblue sm:text-sm"
                                    id="email" name="email" type="email" value="{{ old('email') }}"
                                    placeholder="Johndoe@gmail.com" required="">
                                <svg class="absolute h-4 w-4 -translate-y-7 translate-x-4 text-gg"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>


                            </div>

                        </div>
                        <div x-data="{ open: false }">
                            <label class="mb-2 block text-sm text-s7 font-medium text-clblack" for="password">
                                Password</label>
                            <div>
                                <svg class="absolute h-4 w-4 translate-y-[0.9rem] translate-x-4 text-gg"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>
                                <input
                                    class="text-gray-900 block h-11 w-full rounded-lg border-2 border-gl p-2.5 px-12 text-s1 focus:border-cmblue sm:text-sm"
                                    id="password" name="password" x-bind:type="open ? 'text' : 'password'"
                                    placeholder="Password" required="">

                                <svg class="absolute h-4 translate-x-[22rem] -translate-y-[1.8rem] text-gg"
                                    x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" @click="open = !open">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                                {{-- Reveal --}}
                                <svg class="absolute h-4 translate-x-[22rem] -translate-y-[1.8rem] text-gg"
                                    x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    x-on:click="open = !open" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>



                            </div>

                        </div>
                        <div>
                            <label class="mb-2 block text-sm text-s7 font-medium text-clblack"
                                for="password_confirmation">
                                Confirm Password</label>
                            <div x-data="{ open: false }">
                                <svg class="absolute h-4 w-4 translate-y-[0.9rem] translate-x-4 text-gg"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>
                                <input
                                    class="focus:ring-primary-600 text-gray-900 block h-11 w-full rounded-lg border-2 border-gl p-2.5 px-12 text-s1 focus:border-cmblue sm:text-sm"
                                    id="password_confirmation" name="password_confirmation"
                                    x-bind:type="open ? 'text' : 'password'" placeholder="Password" required="">

                                <svg class="absolute h-4 translate-x-[22rem] -translate-y-[1.8rem] text-gg"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" x-show="!open" @click="open=!open">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                                {{-- Reveal --}}
                                <svg class="absolute h-4 translate-x-[22rem] -translate-y-[1.8rem] text-gg"
                                    x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" x-on:click="open = !open" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>





                            </div>

                        </div>
                        {{-- Profile Picture  --}}
                        <div>
                            <label class="mb-2 block text-sm text-s7 font-medium text-clblack"
                                for="password_confirmation">
                                Profile picture</label>
                            <input
                                class="white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 border-gray-300 bg-gray-50 text-gray-900 block w-full cursor-pointer rounded-lg border text-lg focus:outline-none"
                                id="image-upload" name="image-upload" type="file">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input class="border-gray-300 bg-gray-50 h-4 w-4 rounded border focus:ring-0"
                                        id="terms" name="terms" type="checkbox" aria-describedby="remember">
                                </div>
                                <div class="ml-3 text-s8">
                                    <label class="text-gray-500" for="remember">I agree to Terms and Condtions</label>
                                </div>
                            </div>
                        </div>
                        <button
                            class="focus:ring-primary-300 w-full rounded-lg bg-cmblue px-5 py-2.5 text-center text-s7 font-semibold text-white focus:outline-none focus:ring-0 hover:bg-clblue"
                            type="submit">Sign in</button>
                        <p class="text-gray-500 text-center text-sm font-light">
                            Already have an account? <span class="text-cmblue">
                                <a class="font-medium hover:underline" href="{{ route('login') }}">Log In</a>
                            </span>
                        </p>
                        <div>
                            <p class="text-center font-semibold text-clblack">Or</p>
                            <div class="mt-4 flex pl-10">
                                <a href="">
                                    <div
                                        class="mr-4 flex rounded border-2 border-gl px-6 py-2 font-semibold text-clblack">
                                        <img class="mr-4 h-6 w-6" src="{{ asset('images/google.png') }}"
                                            alt="google logo">
                                        <p>Google</p>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="flex rounded border-2 border-gl px-6 py-2 font-semibold text-clblack">
                                        <img class="mr-4 h-6 w-6" src="{{ asset('images/github.png') }}"
                                            alt="github logo">
                                        <p>Github</p>
                                    </div>
                                </a>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
