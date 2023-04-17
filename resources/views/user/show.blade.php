<x-app-layout :title="$title">

    <div>
        {{-- Header section --}}
        <div class="ml-[20rem] mt-10 flex h-[15rem] w-[55rem] rounded bg-[#F3FCFF] shadow">

            {{-- Image --}}
            <img class="bg-yellow ml-8 mt-6 h-[12rem] w-[12rem] rounded-full border-2 border-gl object-cover"
                src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/user.jpeg') }}">

            </img>
            <a href="#">
                <div
                    class="bg-gray-200 hover:bg-gray-300 absolute top-[18rem] left-[30rem] h-[1.8rem] w-[1.8rem] rounded-full">
                    <svg class="h-4 w-4 translate-x-1.5 translate-y-1.5 text-cmblue" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>


                </div>
            </a>
            {{-- Small details --}}
            <div class="mt-14 ml-14">
                <h1 class="text-s3 font-semibold text-cdblack">{{ $user->name }}</h1>
                <p class="mt-4 text-sm text-cgray">Created at&nbsp; {{ $user->created_at->format('F d, Y') }}</p>
            </div>
        </div>

        {{-- Info Section --}}
        <div class="ml-[20rem] mt-6 h-full w-[55rem] rounded py-6 px-6">

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="group relative z-0 mb-6 w-full">
                        <input
                            class="border-gray-300 text-gray-900 peer block w-full appearance-none border-0 border-b-2 bg-transparent py-2.5 px-0 text-sm focus:border-blue-600 focus:outline-none focus:ring-0"
                            id="floating_first_name" name="floating_first_name" type="text"
                            value="{{ $user->name }}" placeholder="" disabled />
                        <label
                            class="text-gray-500 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600"
                            for="floating_first_name">First name</label>
                    </div>
                    <div class="group relative z-0 mb-6 w-full">
                        <input
                            class="border-gray-300 text-gray-900 peer block w-full appearance-none border-0 border-b-2 bg-transparent py-2.5 px-0 text-sm focus:border-blue-600 focus:outline-none focus:ring-0"
                            id="floating_last_name" name="floating_last_name" type="text" placeholder=""disabled />
                        <label
                            class="text-gray-500 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600"
                            for="floating_last_name">Last name</label>
                    </div>
                </div>
                <div class="group relative z-0 mb-6 w-full">
                    <input
                        class="border-gray-300 text-gray-900 peer block w-full appearance-none border-0 border-b-2 bg-transparent py-2.5 px-0 text-sm focus:border-blue-600 focus:outline-none focus:ring-0"
                        id="email" name="email" type="email" value="{{ $user->email }}" disabled />
                    <label
                        class="text-gray-500 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600"
                        for="email">Email address</label>
                </div>
                <div class="group relative z-0 mb-6 flex w-full">
                    <div>
                        <input
                            class="border-gray-300 text-gray-900 peer block w-1/2 appearance-none border-0 border-b-2 bg-transparent py-2.5 px-0 text-sm focus:border-blue-600 focus:outline-none focus:ring-0"
                            id="floating_password" name="floating_password" type="password" value="00000000"
                            placeholder="" disabled />
                        <label
                            class="text-gray-500 absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600"
                            for="floating_password">Password</label>
                    </div>

                    <div>
                        <a href="{{ route('password.request') }}">Change Password</a>
                    </div>

                </div>
                <button
                    class="w-full rounded-lg bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-green-800 sm:w-auto"
                    type="submit">Edit</button>
            </form>

        </div>
    </div>



</x-app-layout>
