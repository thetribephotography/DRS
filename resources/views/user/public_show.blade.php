<x-app-layout :title="$title">

    <div class="ml-[20rem]">
        {{-- Header section --}}
        <div class="mt-10 flex h-[15rem] w-[55rem] rounded bg-[#F3FCFF] shadow">

            {{-- Image --}}
            <img class="bg-yellow ml-8 mt-6 h-[12rem] w-[12rem] rounded-full border-2 border-gl object-cover"
                src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/user.jpeg') }}">

            </img>
            {{-- Small details --}}
            <div class="mt-14 ml-14">
                <h1 class="text-s3 font-semibold text-cdblack">{{ $user->name }}</h1>
            </div>
        </div>


        <div class="mb-2 mt-8 w-1/2 border-b-2 border-clgray py-4 shadow-sm">
            <h4>Uploads</h4>
        </div>
        <section class="mt-4">
            <div class="py-4 px-6">
                @foreach ($user->uploads as $upload)
                    {{-- Main --}}
                    <div class="mb-8 w-full font-inter md:w-[24rem] lg:w-[60rem]">
                        <div class="flex flex-col px-2 lg:flex-row">
                            @if ($upload->topic_id == 1)
                                {{-- For image --}}
                                <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_article.png') }}"
                                        alt="Article">
                                </div>
                            @elseif ($upload->topic_id == 2)
                                {{-- For image --}}
                                <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_software.png') }}"
                                        alt="Software">
                                </div>
                            @elseif ($upload->topic_id == 3)
                                {{-- For image --}}
                                <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_dataset.png') }}"
                                        alt="Dataset">
                                </div>
                            @elseif($upload->topic_id == 4)
                                {{-- For image --}}
                                <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_workflow.png') }}"
                                        alt="Workflow">
                                </div>
                            @endif

                            {{-- For text --}}
                            <div class="my-2 flex flex-col md:mt-0 lg:ml-4">
                                {{-- ForTop Part --}}
                                <div class="flex justify-between lg:justify-start">
                                    @if ($upload->access_id == 1)
                                        {{-- Visibility --}}
                                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                            </svg>

                                            <p class="ml-1">Article</p>
                                        </div>
                                    @elseif ($upload->topic_id == 2)
                                        {{-- Type --}}
                                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                            </svg>

                                            <p class="ml-1">Software</p>
                                        </div>
                                    @elseif ($upload->topic_id == 3)
                                        {{-- Type --}}
                                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                            </svg>

                                            <p class="ml-1">Dataset</p>
                                        </div>
                                    @elseif($upload->topic_id == 4)
                                        {{-- Type --}}
                                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                    <a class="text-decoration-none hover:underline" href="/upload/public">
                                        <h3 class="text-s7 font-semibold text-cdblack md:font-regular">
                                            {{ $upload->title }}
                                        </h3>
                                    </a>
                                    <p class="mt-1 font-light text-[#6F737A]">{{ $upload->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 h-[1px] w-full bg-[#C3C2C2]"></div>
                    </div>
                    {{-- End --}}
                @endforeach
            </div>
        </section>
    </div>



</x-app-layout>
