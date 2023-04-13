<x-app-layout :title="$title">
    {{-- Modal  --}}
    <div class="absolute top-36 left-24 right-0 z-50 h-[calc(100%-1rem)] p-4 md:h-full" id="modal-div" tabindex="-1"
        style="display:none;">
        <div class="relative h-full w-full max-w-md md:h-auto">
            <div class="relative rounded-lg bg-white shadow">
                <button
                    class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                    id="modal-div-btn" data-modal-hide="popup-modal" type="button">
                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <a class="mr-2 inline-flex items-center rounded-lg bg-cmblue px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-red-300 hover:bg-b-hover"
                        data-modal-hide="popup-modal" href="{{ route('user.upload') }}">
                        Upload file
                    </a>
                    <a class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 hover:text-gray-900"
                        data-modal-hide="popup-modal" href="{{ route('group.create') }}">Create group</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal ende --}}
    {{-- Flash Message - Success --}}
    @if (session('success'))
        <div class="absolute left-[40rem] mb-4 flex rounded-lg bg-green-500 p-4 text-sm text-white transition duration-700 ease-in-out"
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
    <div class="lg:py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <h3 class="mb-2 mt-6 text-s5 font-semibold text-cdblack lg:mt-0 lg:text-s3">Welcome back
                    <span class="text-cmblue">{{ Auth::user()->name }}</span> !
                </h3>
                <div
                    class="relative mt-6 flex w-full justify-between overflow-x-auto border border-[#D9D9D9] p-4 sm:rounded-lg lg:mt-10 lg:w-[50rem] lg:p-8">

                    <div class="" id="create-div">
                        {{-- POP up --}}
                        {{-- <div class="absolute left-[7.5rem] top-[10rem] flex">
                                <div class="hover:text-white">
                                    <a class="block max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-cmblue"
                                        href="{{ route('user.upload') }}">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Icon</h5>
                                        <p class="font-semibold text-gray-700">Uploads</p>
                                    </a>
                                </div>
                                <div class="ml-8">
                                    <a class="block max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-cmblue"
                                        href="{{ route('group.create') }}">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Icon</h5>
                                        <p class="font-semibold text-gray-700">Group</p>
                                    </a>
                                </div>
                            </div> --}}
                        {{-- End --}}
                        <div class="h-14 w-14 rounded-full bg-cmblue hover:bg-[#03739D] md:h-16 md:w-16 lg:h-24 lg:w-24"
                            x-show="true" @click="open = !open">
                            <svg class="h-4 w-4 translate-x-5 translate-y-5 lg:h-8 lg:w-8 lg:translate-x-8 lg:translate-y-8"
                                width="33" height="33" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.711 2L16.4578 31.1688ZM2 16.4578L31.1688 16.711Z" fill="white" />
                                <path d="M16.711 2L16.4578 31.1688M2 16.4578L31.1688 16.711" stroke="white"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h4 class="ml-2 mt-2 font-semibold text-clblack lg:mt-4 lg:ml-5">Create</h4>
                    </div>


                    <a href="{{ route('upload.upload_list') }}">
                        <div class="">
                            <div
                                class="h-14 w-14 rounded-full bg-cmblue hover:bg-[#03739D] md:h-16 md:w-16 lg:h-24 lg:w-24">
                                <svg class="h-4 w-4 translate-x-5 translate-y-5 lg:h-8 lg:w-8 lg:translate-x-8 lg:translate-y-8"
                                    width="26" height="21" viewBox="0 0 26 21" fill="none" width="33"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9675 17.0953L18.2 11.8125L12.9675 6.52969L11.1475 8.36719L13.26 10.5H7.8V13.125H13.26L11.1475 15.2578L12.9675 17.0953ZM2.6 21C1.885 21 1.27313 20.7432 0.7644 20.2296C0.2548 19.7151 0 19.0969 0 18.375V2.625C0 1.90312 0.2548 1.28537 0.7644 0.77175C1.27313 0.25725 1.885 0 2.6 0H10.4L13 2.625H23.4C24.115 2.625 24.7273 2.88225 25.2369 3.39675C25.7456 3.91037 26 4.52812 26 5.25V18.375C26 19.0969 25.7456 19.7151 25.2369 20.2296C24.7273 20.7432 24.115 21 23.4 21H2.6Z"
                                        fill="white" />
                                </svg>

                            </div>
                            <h4 class="ml-2 mt-2 font-semibold text-clblack lg:mt-4 lg:ml-7">Files</h4>
                        </div>
                    </a>
                    <a href="{{ route('group.show_all') }}">
                        <div class="">
                            <div
                                class="h-14 w-14 rounded-full bg-cmblue hover:bg-[#03739D] md:h-16 md:w-16 lg:h-24 lg:w-24">
                                <svg class="h-4 w-4 translate-x-5 translate-y-5 lg:h-8 lg:w-8 lg:translate-x-9 lg:translate-y-8"
                                    width="26" height="19" viewBox="0 0 26 19" fill="none" width="33"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 18.9091V15.6C0 14.9303 0.172545 14.3146 0.517636 13.7528C0.861939 13.1918 1.3197 12.7636 1.89091 12.4682C3.11212 11.8576 4.35303 11.3994 5.61364 11.0937C6.87424 10.7888 8.15455 10.6364 9.45455 10.6364C10.7545 10.6364 12.0348 10.7888 13.2955 11.0937C14.5561 11.3994 15.797 11.8576 17.0182 12.4682C17.5894 12.7636 18.0472 13.1918 18.3915 13.7528C18.7365 14.3146 18.9091 14.9303 18.9091 15.6V18.9091H0ZM21.2727 18.9091V15.3636C21.2727 14.497 21.0316 13.6646 20.5495 12.8665C20.0665 12.0691 19.3818 11.3848 18.4955 10.8136C19.5 10.9318 20.4455 11.1335 21.3318 11.4187C22.2182 11.7047 23.0455 12.0545 23.8136 12.4682C24.5227 12.8621 25.0644 13.3002 25.4386 13.7824C25.8129 14.2653 26 14.7924 26 15.3636V18.9091H21.2727ZM9.45455 9.45455C8.15455 9.45455 7.04167 8.99167 6.11591 8.06591C5.19015 7.14015 4.72727 6.02727 4.72727 4.72727C4.72727 3.42727 5.19015 2.31439 6.11591 1.38864C7.04167 0.462879 8.15455 0 9.45455 0C10.7545 0 11.8674 0.462879 12.7932 1.38864C13.7189 2.31439 14.1818 3.42727 14.1818 4.72727C14.1818 6.02727 13.7189 7.14015 12.7932 8.06591C11.8674 8.99167 10.7545 9.45455 9.45455 9.45455ZM21.2727 4.72727C21.2727 6.02727 20.8099 7.14015 19.8841 8.06591C18.9583 8.99167 17.8455 9.45455 16.5455 9.45455C16.3288 9.45455 16.053 9.43012 15.7182 9.38127C15.3833 9.33164 15.1076 9.27727 14.8909 9.21818C15.4227 8.58788 15.8312 7.88864 16.1165 7.12045C16.4025 6.35227 16.5455 5.55455 16.5455 4.72727C16.5455 3.9 16.4025 3.10227 16.1165 2.33409C15.8312 1.56591 15.4227 0.866666 14.8909 0.236363C15.1667 0.137879 15.4424 0.0736669 15.7182 0.0437275C15.9939 0.014576 16.2697 0 16.5455 0C17.8455 0 18.9583 0.462879 19.8841 1.38864C20.8099 2.31439 21.2727 3.42727 21.2727 4.72727Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <h4 class="ml-2 mt-2 font-semibold text-clblack lg:mt-4 lg:ml-5">Groups</h4>
                        </div>
                    </a>
                </div>


            </div>
        </div>



    </div>
    </div>


</x-app-layout>
