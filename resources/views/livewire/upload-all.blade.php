<div>
    {{-- Modal ende --}}
    {{-- Flash Message - Success --}}
    @if (session('success'))
        <div class="absolute left-[40rem] z-40 mb-4 flex rounded-lg bg-green-500 p-4 text-sm text-white transition duration-700 ease-in-out"
            id="flash-message" role="alert">
            <svg class="mr-3 inline h-5 w-5 flex-shrink-0" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success:</span> {{ session('success') }}
            </div>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('flash-message').classList.add('opacity-0');
                setTimeout(function() {
                    document.getElementById('flash-message').remove();
                }, 10000)
            }, 4000); // remove the alert after 4 seconds
        </script>
    @endif
    {{-- Flash Message - Error --}}
    @if (session('error'))
        <div class="absolute left-[40rem] mb-4 flex rounded-lg bg-red-500 p-4 text-sm text-white transition duration-700 ease-in-out"
            id="flash-message" role="alert">
            <svg class="mr-3 inline h-5 w-5 flex-shrink-0" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Error:</span> {{ session('error') }}
            </div>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('flash-message').classList.add('opacity-0');
                setTimeout(function() {
                    document.getElementById('flash-message').remove();
                }, 10000)
            }, 4000); // remove the alert after 4 seconds
        </script>
    @endif
    {{-- End flash messages --}}
    {{-- Sub main --}}
    <div class="h-full w-full py-[2rem] pl-[6rem]">
        {{-- Top --}}
        <div class="flex h-full w-[81.5rem] justify-between">
            <div class="flex">
                <h1 class="text-s4 font-semibold text-cdblack">Uploads</h1>
                <span class="ml-4 mt-3 text-s6 font-medium text-clgray">{{ count($uploads) }}</span>
            </div>

            <div class="ml-8 flex w-1/2 items-center">
                {{-- SVG sort --}}
                <div class="mr-2">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>

                </div>
                {{-- circle for hover --}}
                <div class="a absolute h-4 w-4 rounded-full bg-cmblue">

                </div>
                {{-- SVG layoutt --}}
                <div class="mr-6">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M20 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16Zm-9 10H5v6h6v-6Zm2 6h6V5h-6v14ZM11 5H5v6h6V5Z" />
                    </svg>
                </div>
                <div class="relative mr-2 w-full">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-cmblue" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                        class="bg-gray-50 text-gray-900 block w-full rounded-lg border border-gg p-2.5 pl-10 text-sm focus:border-cmblue focus:ring-clblue"
                        type="text" placeholder="Search.." wire:model.debounce.1000ms="search">
                </div>

                <a href="{{ route('user.upload') }}">
                    <button
                        class="w-[9rem] rounded-md bg-cmblue px-3 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-b-hover"
                        type="button">New Upload</button>
                </a>
            </div>


        </div>

        {{-- content --}}
        <div class="g mt-6 h-full w-[81.5rem]">

            {{-- Box --}}
            <div class="">
                <div class="relative overflow-x-auto pb-2 pt-12 pl-8 shadow-md sm:rounded-lg">

                    {{-- LoadingBar --}}
                    <div class="text-center" wire:loading>
                        <div role="status">
                            <svg class="text-gray-200 mr-2 inline h-8 w-8 animate-spin fill-clblue" aria-hidden="true"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    {{-- Loading bar end --}}
                    {{-- Main --}}
                    @foreach ($uploads as $upload)
                        {{-- Pop Up modal --}}
                        {{-- <div class="absolute top-[25rem] left-[30rem] z-50 w-full md:h-full">
                            <div class="absolute h-full w-full max-w-lg p-4 md:h-auto">
                                <div class="absolute rounded-lg bg-white p-4 shadow md:p-8">
                                    <div class="text-gray-500 mb-4 text-sm font-light">
                                        <h3 class="text-gray-900 d mb-3 text-2xl font-bold">Change Access</h3>
                                        <p>
                                            Change who can access your documents
                                        </p>
                                    </div>
                                    <form action="{{ route('upload.update.access', $upload->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="mx-4">
                                            <label for="current_access">
                                                Current Access
                                            </label>
                                            @if ($upload->access_id == 1)
                                                <input type="text" value="Public">
                                            @elseif ($upload->access_id == 2)
                                                <input type="text" value="Private">
                                            @elseif ($upload->access_id == 3)
                                                <input type="text" value="Group">
                                            @elseif ($upload->access_id == 4)
                                                <input type="text" value="Personal">
                                            @endif
                                        </div>
                                        <label class="text-gray-900 mb-2 block text-sm font-medium"
                                            for="">Update Acess</label>
                                        <select
                                            class="bg-gray-50 border-gray-300 text-gray-900 block w-full rounded-lg border p-2.5 text-sm focus:border-blue-500 focus:ring-blue-500"
                                            id="access_type" name="access_type">
                                            <option value="1">Public</option>
                                            <option value="2">Private</option>
                                            <option value="3">Group</option>
                                            <option value="4">Personal</option>
                                        </select>
                                        <button>Cancel</button>
                                        <button type="submit">Change</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        {{-- Pop up modal end --}}

                        {{-- Main --}}
                        <div class="mb-8 w-full font-inter md:w-[24rem] lg:w-full">
                            <div class="flex flex-col px-2 lg:flex-row">
                                {{-- For image --}}
                                <div class="my-2 h-full w-full lg:mb-0 lg:h-20 lg:w-20">
                                    @if ($upload->topic_id == 1)
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_article.png') }}" alt="Article">
                                    @elseif ($upload->topic_id == 2)
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_software.png') }}" alt="Software">
                                    @elseif ($upload->topic_id == 3)
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_dataset.png') }}" alt="Dataset">
                                    @elseif ($upload->topic_id == 4)
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/pic_workflow.png') }}" alt="Workflow">
                                    @endif
                                </div>


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
                                        @elseif($upload->access_id == 4)
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
                                                <p class="ml-1">Personal</p>
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
                                                        d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
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
                                        {{-- Publication Date --}}
                                        <div class="mr-4 flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                            </svg>
                                            <p class="ml-1">{{ $upload->published_at->format('F d, Y') }}</p>
                                        </div>
                                        {{-- Creation Date --}}
                                        <div class="flex text-s9 text-[#6F737A]">
                                            <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                            </svg>
                                            <p class="ml-1">{{ $upload->created_at->format('F d, Y') }}</p>
                                        </div>

                                        {{-- Dropdown start --}}
                                        <div class="absolute right-15" x-data="{ show: false }">
                                            <button
                                                class="text-gray-900 hover:bg-gray-100 focus:ring-gray-50 inline-flex items-center rounded-lg bg-white p-1 text-center text-sm font-medium focus:outline-none focus:ring-4"
                                                type="button" x-show="true" @click="show=!show">
                                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div class="absolute top-4 right-14 z-10 w-44 rounded-lg shadow"
                                                x-show="show">
                                                <ul class="text-gray-700 text-sm">
                                                    <li>
                                                        <a class="hover:bg-gray-100 block px-4 py-2" href="#">
                                                            <div class="flex hover:text-green-400"
                                                                x-data="{ open: false }">
                                                                <svg class="h-4 w-4"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                </svg>

                                                                <span class="ml-1" x-show="true"
                                                                    @click="open=!open">Change Access</span>
                                                                {{-- Test --}}
                                                                <div class="h-modal fixed z-50 w-full overflow-y-auto overflow-x-hidden md:inset-0 md:h-full"
                                                                    x-show="open">
                                                                    <div class="h-full w-full max-w-lg p-4 md:h-auto">
                                                                        <div
                                                                            class="rounded-lg bg-white p-4 shadow md:p-8">
                                                                            <div
                                                                                class="text-gray-500 mb-4 text-sm font-light">
                                                                                <h3
                                                                                    class="mb-3 text-2xl font-bold text-clblack">
                                                                                    Change Access</h3>
                                                                                <form
                                                                                    action="{{ route('upload.update.access', $upload->id) }}"
                                                                                    method="POST"
                                                                                    enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <label
                                                                                        class="mb-2 block text-sm font-medium text-clblack"
                                                                                        for="">Update
                                                                                        Access</label>
                                                                                    <select
                                                                                        class="bg-gray-50 border-gray-300 block w-full rounded-lg border p-2.5 text-sm text-clblack focus:border-blue-500 focus:ring-blue-500"
                                                                                        id="access_type"
                                                                                        name="access_type">
                                                                                        <option value="1">Public
                                                                                        </option>
                                                                                        <option value="2">Private
                                                                                        </option>
                                                                                        <option value="3">Group
                                                                                        </option>
                                                                                        <option value="4">Personal
                                                                                        </option>
                                                                                    </select>

                                                                                    <div
                                                                                        class="mt-4 items-center justify-between space-y-4 pt-0 sm:flex sm:space-y-0">
                                                                                        <div
                                                                                            class="items-center space-y-4 sm:flex sm:space-x-4 sm:space-y-0">
                                                                                            <button
                                                                                                class="border-gray-200 hover:bg-gray-100 focus:ring-primary-300 hover:text-gray-900 w-full rounded-lg border bg-white py-2 px-4 text-sm font-medium text-clblack focus:z-10 focus:outline-none focus:ring-4 sm:w-auto"
                                                                                                id="close-modal"
                                                                                                type="button"
                                                                                                @click="open = false">Cancel</button>
                                                                                            <button
                                                                                                class="hover:bg-primary-800 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 w-full rounded-lg bg-cmblue py-2 px-4 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 sm:w-auto"
                                                                                                id="confirm-button"
                                                                                                type="submit">Confirm</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- End Test --}}
                                                            </div>
                                                        </a>
                                                        @if ($upload->topic_id == 1)
                                                            <a class="hover:bg-gray-100 block border-b border-gg px-4 py-2"
                                                                href="{{ route('upload.article.edit', $upload->slug) }}">
                                                                <div class="flex hover:text-blue-400">
                                                                    <svg class="h-4 w-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                    </svg>
                                                                    <span class="ml-1">Edit</span>
                                                                </div>
                                                            </a>
                                                        @elseif ($upload->topic_id == 2)
                                                            <a class="hover:bg-gray-100 block px-4 py-2"
                                                                href="{{ route('upload.software.edit', $upload->slug) }}">
                                                                <div class="flex hover:text-blue-400">
                                                                    <svg class="h-4 w-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                    </svg>
                                                                    <span class="ml-1">Edit</span>
                                                                </div>
                                                            </a>
                                                        @elseif ($upload->topic_id == 3)
                                                            <a class="hover:bg-gray-100 block px-4 py-2"
                                                                href="{{ route('upload.dataset.edit', $upload->slug) }}">
                                                                <div class="flex hover:text-blue-400">
                                                                    <svg class="h-4 w-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                    </svg>
                                                                    <span class="ml-1">Edit</span>
                                                                </div>
                                                            </a>
                                                        @elseif ($upload->topic_id == 4)
                                                            <a class="hover:bg-gray-100 block px-4 py-2"
                                                                href="{{ route('upload.workflow.edit', $upload->slug) }}">
                                                                <div class="flex hover:text-blue-400">
                                                                    <svg class="h-4 w-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                    </svg>
                                                                    <span class="ml-1">Edit</span>
                                                                </div>
                                                            </a>
                                                        @endif

                                                    </li>
                                                    <li>
                                                        <form class="hover:bg-gray-100 block px-4 py-2"
                                                            action="{{ route('upload.destroy', $upload->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">
                                                                <div class="flex hover:text-red-500">
                                                                    <svg class="h-4 w-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                    <span class="ml-1">Delete</span>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- Dropdown end --}}
                                    </div>
                                    {{-- End --}}
                                    <div class="mt-2">
                                        <a class="text-decoration-none hover:underline"
                                            href="/upload/public/{{ $upload->slug }}">
                                            <h3 class="text-s7 font-semibold text-cdblack md:font-regular">
                                                {{ $upload->title }}
                                            </h3>
                                        </a>
                                        <div class="w-[42rem] overflow-hidden">
                                            <p class="mt-1 font-light text-[#6F737A]">{{ $upload->description }}</p>
                                        </div>
                                    </div>
                                    {{-- <div class="mt-4 flex md:mt-3">
                                        <img class="h-4 w-4 rounded-full"
                                            src="{{ $upload->users->profile_picture ? asset('storage/' . $upload->users->profile_picture) : asset('images/user.jpeg') }}"
                                            alt="">
                                        <a class="ml-2 text-s9 font-regular text-[#6F737A] hover:text-cmblue hover:underline"
                                            href="{{ route('user.profile.public', $upload->users->_id) }}">
                                            <p>{{ $upload->users->name }}</p>
                                        </a>
                                    </div> --}}

                                </div>
                            </div>
                            <div class="mt-2 h-[1px] w-full bg-[#C3C2C2]"></div>
                        </div>
                        {{-- End --}}
                    @endforeach

                    {{-- Main End --}}
                </div>

            </div>
            {{-- Enf flex box --}}
        </div>
    </div>
</div>
