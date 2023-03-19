<x-app-layout>


    <x-slot name="header">
        <div class="flex">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Dashboard') }}
            </h2>
            <div class="ml-6 flex">
                {{-- Bell Notification --}}
                <div class="mx-10 h-9 w-9 rounded-full hover:bg-gl">
                    <button class="">
                        <span class="absolute translate-x-3 text-s9 font-bold text-clblack">4</span>
                        <svg class="h-6 w-6 translate-y-1.5 translate-x-1.5 text-clblack"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>


                    </button>
                </div>

                {{-- User Icon --}}
                <div x-data="{ open: false }">
                    {{-- Button --}}
                    <button class="mx-3 flex rounded-full text-sm focus:ring-4 focus:ring-gray-300" type="button"
                        @click="open=!open">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>

                    {{-- Panel --}}
                    <div class="absolute right-16 mt-4 w-28 rounded border border-black bg-gray-500 p-2" x-show="open">
                        <div>
                            <a classs="block w-full" href="">Action 1</a>
                            <a classs="block w-full" href="">Action 2</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

                {{-- TABLE STARTS HERE --}}
                <div class="relative overflow-x-auto p-8 shadow-md sm:rounded-lg">
                    <h3 class="mb-2 text-3xl">Actions</h3>
                    <table class="w-full text-left text-sm text-gray-500">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                            <tr>
                                <th class="px-6 py-3" scope="col">
                                    Name
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b bg-white">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                    User
                                </th>
                                <td class="px-6 py-4">
                                    <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                        href="{{ route('group.create') }}">Edit</a>
                                    <a class="rounded-full bg-red-500 py-2 px-4 font-bold text-white hover:bg-red-700"
                                        href="{{ route('group.create') }}">Delete</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                    Upload
                                </th>
                                <td class="px-6 py-4">
                                    <a class="rounded-full bg-green-500 py-2 px-4 font-bold text-white hover:bg-green-700"
                                        href="{{ route('user.upload') }}">Create</a>
                                    <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                        href="{{ route('upload.upload_list') }}">Show All</a>
                                    <a class="rounded-full bg-red-500 py-2 px-4 font-bold text-white hover:bg-red-700"
                                        href="{{ route('group.create') }}">Delete</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                    Group
                                </th>
                                <td class="px-6 py-4">
                                    <a class="rounded-full bg-green-500 py-2 px-4 font-bold text-white hover:bg-green-700"
                                        href=" {{ route('group.create') }} ">Create</a>
                                    <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                        href=" {{ route('group.show_all') }} ">Show All</a>
                                    {{-- <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a> --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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
