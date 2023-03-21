<x-app-layout :title="$title">
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <h3 class="mb-2 text-s3 font-semibold text-cdblack">Welcome back
                    <span class="text-cmblue">{{ Auth::user()->name }}</span> !
                </h3>
                <div
                    class="relative mt-10 flex w-[50rem] justify-between overflow-x-auto border border-[#D9D9D9] p-8 sm:rounded-lg">
                    <a href="">
                        <div class="">
                            <div class="h-24 w-24 rounded-full bg-cmblue hover:bg-[#03739D]">
                                <svg class="h-7 w-7 translate-x-8 translate-y-8" width="33" height="33"
                                    viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.711 2L16.4578 31.1688ZM2 16.4578L31.1688 16.711Z" fill="white" />
                                    <path d="M16.711 2L16.4578 31.1688M2 16.4578L31.1688 16.711" stroke="white"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h4 class="mt-4 ml-5 font-semibold text-clblack">Create</h4>
                        </div>
                    </a>
                    <a href="{{ route('upload.upload_list') }}">
                        <div class="">
                            <div class="h-24 w-24 rounded-full bg-cmblue hover:bg-[#03739D]">
                                <svg class="h-7 w-7 translate-x-8 translate-y-8" width="26" height="21"
                                    viewBox="0 0 26 21" fill="none" width="33"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9675 17.0953L18.2 11.8125L12.9675 6.52969L11.1475 8.36719L13.26 10.5H7.8V13.125H13.26L11.1475 15.2578L12.9675 17.0953ZM2.6 21C1.885 21 1.27313 20.7432 0.7644 20.2296C0.2548 19.7151 0 19.0969 0 18.375V2.625C0 1.90312 0.2548 1.28537 0.7644 0.77175C1.27313 0.25725 1.885 0 2.6 0H10.4L13 2.625H23.4C24.115 2.625 24.7273 2.88225 25.2369 3.39675C25.7456 3.91037 26 4.52812 26 5.25V18.375C26 19.0969 25.7456 19.7151 25.2369 20.2296C24.7273 20.7432 24.115 21 23.4 21H2.6Z"
                                        fill="white" />
                                </svg>

                            </div>
                            <h4 class="mt-4 ml-7 font-semibold text-clblack">Files</h4>
                        </div>
                    </a>
                    <a href="{{ route('group.show_all') }}">
                        <div class="">
                            <div class="h-24 w-24 rounded-full bg-cmblue hover:bg-[#03739D]">
                                <svg class="h-7 w-7 translate-x-9 translate-y-8" width="26" height="19"
                                    viewBox="0 0 26 19" fill="none" width="33"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 18.9091V15.6C0 14.9303 0.172545 14.3146 0.517636 13.7528C0.861939 13.1918 1.3197 12.7636 1.89091 12.4682C3.11212 11.8576 4.35303 11.3994 5.61364 11.0937C6.87424 10.7888 8.15455 10.6364 9.45455 10.6364C10.7545 10.6364 12.0348 10.7888 13.2955 11.0937C14.5561 11.3994 15.797 11.8576 17.0182 12.4682C17.5894 12.7636 18.0472 13.1918 18.3915 13.7528C18.7365 14.3146 18.9091 14.9303 18.9091 15.6V18.9091H0ZM21.2727 18.9091V15.3636C21.2727 14.497 21.0316 13.6646 20.5495 12.8665C20.0665 12.0691 19.3818 11.3848 18.4955 10.8136C19.5 10.9318 20.4455 11.1335 21.3318 11.4187C22.2182 11.7047 23.0455 12.0545 23.8136 12.4682C24.5227 12.8621 25.0644 13.3002 25.4386 13.7824C25.8129 14.2653 26 14.7924 26 15.3636V18.9091H21.2727ZM9.45455 9.45455C8.15455 9.45455 7.04167 8.99167 6.11591 8.06591C5.19015 7.14015 4.72727 6.02727 4.72727 4.72727C4.72727 3.42727 5.19015 2.31439 6.11591 1.38864C7.04167 0.462879 8.15455 0 9.45455 0C10.7545 0 11.8674 0.462879 12.7932 1.38864C13.7189 2.31439 14.1818 3.42727 14.1818 4.72727C14.1818 6.02727 13.7189 7.14015 12.7932 8.06591C11.8674 8.99167 10.7545 9.45455 9.45455 9.45455ZM21.2727 4.72727C21.2727 6.02727 20.8099 7.14015 19.8841 8.06591C18.9583 8.99167 17.8455 9.45455 16.5455 9.45455C16.3288 9.45455 16.053 9.43012 15.7182 9.38127C15.3833 9.33164 15.1076 9.27727 14.8909 9.21818C15.4227 8.58788 15.8312 7.88864 16.1165 7.12045C16.4025 6.35227 16.5455 5.55455 16.5455 4.72727C16.5455 3.9 16.4025 3.10227 16.1165 2.33409C15.8312 1.56591 15.4227 0.866666 14.8909 0.236363C15.1667 0.137879 15.4424 0.0736669 15.7182 0.0437275C15.9939 0.014576 16.2697 0 16.5455 0C17.8455 0 18.9583 0.462879 19.8841 1.38864C20.8099 2.31439 21.2727 3.42727 21.2727 4.72727Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <h4 class="mt-4 ml-5 font-semibold text-clblack">Groups</h4>
                        </div>
                    </a>
                </div>


                {{-- <!-- Button to open the modal -->
                <button @click="showModal = true">Open Modal</button>

                <!-- Modal -->
                <div class="fixed inset-0 z-10 overflow-y-auto" x-show="showModal" @click.away="showModal = false">
                    <div class="flex min-h-screen items-center justify-center px-4">
                        <div class="overflow-hidden rounded-lg bg-white text-left shadow-xl">
                            <div class="p-4">
                                <!-- Modal content -->
                                <p>This is a modal.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}



                {{-- TABLE ENDS HERE --}}

                {{-- TABLE STARTS HERE --}}

                <div class="relative overflow-x-auto p-8 shadow-md sm:rounded-lg">
                    <h3 class="mb-2 text-3xl">Upload</h3>

                    @if ($uploads == null)
                        <div class="mb-4 flex items-center bg-blue-500 px-4 py-3 text-sm font-bold text-white"
                            role="alert">
                            <svg class="mr-2 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>&nbsp; &nbsp;You haven't made any upload</p>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a
                                class="rounded-full bg-green-500 py-2 px-4 font-bold text-white hover:bg-green-700"
                                href="{{ route('user.upload') }}">Create</a>
                        </div>
                    @endif
                    <table class="w-full text-left text-sm text-gray-500">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                            <tr>
                                <th class="px-6 py-3" scope="col">
                                    Name
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Authors
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Type
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Accessibility
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Category/ies
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Tags
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uploads as $upload)
                                <tr class="border-b bg-white">
                                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                        <a class="hover:underline"
                                            href="/uploads/{{ $upload->id }}">{{ $upload->title }}</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{-- @foreach ($upload->author as $authors) --}}
                                        {{ $upload->author }}
                                        {{-- @endforeach --}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $upload->type }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $upload->acess_rights }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @foreach ($upload->category_id as $category)
                                            {{ $category }}, <br>
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $upload->tags }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                            href="#">Edit</a>
                                        <a class="rounded-full bg-red-500 py-2 px-4 font-bold text-white hover:bg-red-700"
                                            href="#">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- TABLE STARTS HERE --}}

                <div class="relative overflow-x-auto p-8 shadow-md sm:rounded-lg">
                    <h3 class="mb-2 text-3xl">Group</h3>
                    {{-- @if (count($groups) == 0)
                  <div class="flex items-center bg-blue-500 text-white text-sm mb-4 font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>You don't belong or have created a group</p>
                    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <a href="{{route('group.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                  </div>
                @endif --}}
                    <table class="w-full text-left text-sm text-gray-500">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                            <tr>
                                <th class="px-6 py-3" scope="col">
                                    Name
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Members
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b bg-white">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                    User4484989
                                </th>
                                <td class="px-6 py-4">
                                    Group member 1, Group member 2
                                </td>
                                <td class="px-6 py-4">
                                    <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                        href="{{ route('group.create') }}">Edit</a>
                                    <a class="rounded-full bg-red-500 py-2 px-4 font-bold text-white hover:bg-red-700"
                                        href="{{ route('group.create') }}">Delete</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                    The other group i created
                                </th>
                                <td class="px-6 py-4">
                                    Group member 1, Group member 2
                                </td>
                                <td class="px-6 py-4">
                                    <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                        href="{{ route('group.create') }}">Edit</a>
                                    <a class="rounded-full bg-red-500 py-2 px-4 font-bold text-white hover:bg-red-700"
                                        href="{{ route('group.create') }}">Delete</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                    FaintmeOne
                                </th>
                                <td class="px-6 py-4">
                                    Group member 1, Group member 2
                                </td>
                                <td class="px-6 py-4">
                                    <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                        href="{{ route('group.create') }}">Edit</a>
                                    <a class="rounded-full bg-red-500 py-2 px-4 font-bold text-white hover:bg-red-700"
                                        href="{{ route('group.create') }}">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- TABLE ENDS HERE --}}


            </div>
        </div>
    </div>
    </div>


</x-app-layout>
