@foreach ($uploads as $upload)
    {{-- Main --}}
    <div class="mb-8 w-full font-inter md:w-[24rem] lg:w-[60rem]">
        <div class="flex flex-col px-2 lg:flex-row">
            {{-- For image --}}
            <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                @if ($upload->topic_id == 1)
                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_article.png') }}" alt="Article">
                @elseif ($upload->topic_id == 2)
                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_software.png') }}" alt="Software">
                @elseif ($upload->topic_id == 3)
                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_dataset.png') }}" alt="Dataset">
                @elseif ($upload->topic_id == 4)
                    <img class="h-full w-full object-cover" src="{{ asset('images/pic_workflow.png') }}" alt="Workflow">
                @endif
            </div>


            {{-- For text --}}
            <div class="my-2 flex flex-col md:mt-0 lg:ml-4">
                {{-- ForTop Part --}}
                <div class="flex justify-between lg:justify-start">
                    @if ($upload->access_id == 1)
                        {{-- Visibility --}}
                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
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
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
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
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="ml-1">Group</p>
                        </div>
                    @elseif($upload->access_id == 4)
                        {{-- Visibility --}}
                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="ml-1">Personal</p>
                        </div>
                    @endif
                    @if ($upload->topic_id == 1)
                        {{-- Type --}}
                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>

                            <p class="ml-1">Article</p>
                        </div>
                    @elseif ($upload->topic_id == 2)
                        {{-- Type --}}
                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                            </svg>

                            <p class="ml-1">Software</p>
                        </div>
                    @elseif ($upload->topic_id == 3)
                        {{-- Type --}}
                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>

                            <p class="ml-1">Dataset</p>
                        </div>
                    @elseif($upload->topic_id == 4)
                        {{-- Type --}}
                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                            <svg class="h-3 w-3" viewBox="0 0 55 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50 35V27.5C50 24.725 47.775 22.5 45 22.5H30V15H35V0H20V15H25V22.5H10C7.225 22.5 5 24.725 5 27.5V35H0V50H15V35H10V27.5H25V35H20V50H35V35H30V27.5H45V35H40V50H55V35H50ZM25 5H30V10H25V5ZM10 45H5V40H10V45ZM30 45H25V40H30V45ZM50 45H45V40H50V45Z"
                                    fill="#7A7A7A" />
                            </svg>

                            <p class="ml-1">Workflow</p>
                        </div>
                    @endif

                    {{-- Size --}}
                    <div class="mr-4 flex text-s9 text-[#6F737A]">
                        <svg class="" width="13" height="13" viewBox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="13" height="13" fill="white" />
                            <path
                                d="M4.875 6.5V7.58333M3.25 6.5V8.125M6.5 6.5V8.125M9.75 6.5V8.125M8.125 6.5V7.58333M1.625 1.625V3.79167M1.625 2.70833H11.375M11.375 1.625V3.79167M10.7656 6.5C11.102 6.5 11.375 6.77733 11.375 7.11913V10.2142C11.375 10.556 11.102 10.8333 10.7656 10.8333H2.16667C2.02301 10.8333 1.88523 10.7763 1.78365 10.6747C1.68207 10.5731 1.625 10.4353 1.625 10.2917V7.11913C1.625 6.77733 1.898 6.5 2.23438 6.5H10.7656Z"
                                stroke="#6F737A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="ml-1">{{ round($upload->file_size / 1048576, 2) }} MB</p>
                    </div>
                    {{-- Publication Date --}}
                    <div class="mr-4 flex text-s9 text-[#6F737A]">
                        <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <p class="ml-1">{{ $upload->published_at->format('F d, Y') }}</p>
                    </div>
                    {{-- Creation Date --}}
                    <div class="flex text-s9 text-[#6F737A]">
                        <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <p class="ml-1">{{ $upload->created_at->format('F d, Y') }}</p>
                    </div>
                </div>
                {{-- End --}}
                <div class="mt-2">
                    <a class="text-decoration-none hover:underline" href="/upload/public/{{ $upload->slug }}">
                        <h3 class="text-s7 font-semibold text-cdblack md:font-regular">
                            {{ $upload->title }}
                        </h3>
                    </a>
                    <p class="mt-1 font-light text-[#6F737A]">{{ $upload->description }}
                    </p>
                </div>
                <div class="mt-4 flex md:mt-3">
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
