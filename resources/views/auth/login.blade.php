<x-guest-layout>

    <section>
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
            <a class="mb-4 flex items-center text-2xl font-bold text-clblack" href="#">
                <img src="" alt="">
                SoftwareRepoHub
            </a>
            <div class="w-full rounded-lg bg-white shadow sm:max-w-md md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-clblack md:text-2xl">
                        Log In
                    </h1>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label class="mb-2 block text-sm text-s7 font-medium text-clblack" for="email">
                                Email</label>
                            <div>
                                <input
                                    class="focus:ring-primary-600 focus:border-primary-600 block h-11 w-full rounded-lg border-2 border-gl p-2.5 px-12 text-s1 text-gray-900 sm:text-sm"
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
                        <div>
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
                                    class="focus:ring-primary-600 block h-11 w-full rounded-lg border-2 border-gl p-2.5 px-12 text-s1 text-gray-900 focus:border-cmblue sm:text-sm"
                                    id="password" name="password" type="password" placeholder="Password"
                                    required="">

                                <svg class="absolute h-4 translate-x-[22rem] -translate-y-[1.8rem] text-gg"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>



                            </div>

                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input class="h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-0"
                                        id="remember" name="remember" type="checkbox" aria-describedby="remember">
                                </div>
                                <div class="ml-3 text-s8">
                                    <label class="text-gray-500" for="remember">Remember me</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="text-s8 font-medium text-cmblue" href="{{ route('password.request') }}">Forgot
                                    password?</a>
                            @endif

                        </div>
                        <button
                            class="focus:ring-primary-300 w-full rounded-lg bg-cmblue px-5 py-2.5 text-center text-s7 font-semibold text-white hover:bg-clblue focus:outline-none focus:ring-0"
                            type="submit">Sign in</button>
                        <p class="text-center text-sm font-light text-gray-500">
                            Don’t have an account yet? <span class="text-cmblue">
                                <a class="font-medium hover:underline" href="#">Sign up</a>
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
