<x-app-layout :title="$title">

    {{-- Header start --}}
    <div class="h-[10rem] w-full bg-[#C2E7F4] pt-8 shadow">
        <div class="ml-[15rem]">
            <h2 class="mt-5 text-s3 font-bold text-cdblack">Worflow Upload</h2>
        </div>
    </div>
    {{-- End Header --}}


    {{-- Input Fields --}}
    <section class="my-8 ml-[24rem] h-full w-[51rem] pb-6">
        <form method="POST" action="{{ route('uploads.publish') }}" enctype="multipart/form-data">
            @csrf
            {{-- Side by isde --}}
            <div class="mb-6 grid gap-6 px-6 pt-4 md:grid-cols-2">
                <div>

                    <label class="mb-2 block text-sm font-medium text-[#393E46]" for="title">Title</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                            <svg width="10" height="11" viewBox="0 0 14 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0V3H5.5V15H8.5V3H14V0H0Z" fill="#7A7A7A" />
                            </svg>
                        </span>
                        <input
                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                            id="title" name="title" type="text" placeholder=""
                            autocomplete="
                            ">
                    </div>
                    {{-- Error Mesage --}}
                    @error('title')
                        <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="date">Publication
                        Date</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                            <svg class="h-4 w-4 text-[##7A7A7A]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>

                        </span>
                        <input
                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                            id="date" name="date" type="date">
                    </div>
                    {{-- Error Mesage --}}
                    @error('date')
                        <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- End side by side --}}
            {{-- Author --}}
            <div class="mb-6 px-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="authors">Author(s)</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                        @
                    </span>
                    <input
                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                        id="authors" name="author" type="text" placeholder="">
                </div>
                {{-- Error Mesage --}}
                @error('author')
                    <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Description --}}
            <div class="mb-6 px-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="message">Description</label>
                <textarea
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                    id="description" name="description" rows="4" placeholder="A 3-part workflow process.."></textarea>
                {{-- Error Mesage --}}
                @error('description')
                    <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- DIO --}}
            <div class="mb-6 px-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="authors">DIO <span
                        class="text-s9 text-gray-400">(Optional)</span></label>
                <div class="flex">
                    <span
                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                        <svg width="10" height="14" viewBox="0 0 14 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 18C2.9 18 1.95833 17.6083 1.175 16.825C0.391667 16.0417 0 15.1 0 14V5C0 3.61667 0.487666 2.43733 1.463 1.462C2.43833 0.486667 3.61733 -0.000665984 5 6.8306e-07H9C10.3833 6.8306e-07 11.5627 0.487667 12.538 1.463C13.5133 2.43833 14.0007 3.61733 14 5V14C14 15.1 13.6083 16.0417 12.825 16.825C12.0417 17.6083 11.1 18 10 18H4ZM4 16H10C10.55 16 11.021 15.804 11.413 15.412C11.805 15.02 12.0007 14.5493 12 14V5C12 4.16667 11.7083 3.45833 11.125 2.875C10.5417 2.29167 9.83333 2 9 2H5C4.16667 2 3.45833 2.29167 2.875 2.875C2.29167 3.45833 2 4.16667 2 5V14C2 14.55 2.196 15.021 2.588 15.413C2.98 15.805 3.45067 16.0007 4 16ZM4 10C4.28333 10 4.521 9.904 4.713 9.712C4.905 9.52 5.00067 9.28267 5 9C5 8.71667 4.904 8.479 4.712 8.287C4.52 8.095 4.28267 7.99933 4 8C3.71667 8 3.479 8.096 3.287 8.288C3.095 8.48 2.99933 8.71733 3 9C3 9.28333 3.096 9.521 3.288 9.713C3.48 9.905 3.71733 10.0007 4 10ZM7 10C7.28333 10 7.521 9.904 7.713 9.712C7.905 9.52 8.00067 9.28267 8 9C8 8.71667 7.904 8.479 7.712 8.287C7.52 8.095 7.28267 7.99933 7 8C6.71667 8 6.479 8.096 6.287 8.288C6.095 8.48 5.99933 8.71733 6 9C6 9.28333 6.096 9.521 6.288 9.713C6.48 9.905 6.71733 10.0007 7 10ZM10 10C10.2833 10 10.521 9.904 10.713 9.712C10.905 9.52 11.0007 9.28267 11 9C11 8.71667 10.904 8.479 10.712 8.287C10.52 8.095 10.2827 7.99933 10 8C9.71667 8 9.479 8.096 9.287 8.288C9.095 8.48 8.99933 8.71733 9 9C9 9.28333 9.096 9.521 9.288 9.713C9.48 9.905 9.71733 10.0007 10 10Z"
                                fill="black" />
                        </svg>
                    </span>
                    <input
                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                        id="authors" name="dio" type="text" placeholder="http://09291223/">

                </div>

            </div>
            {{-- Category --}}
            <div class="mb-6 px-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="category">Category</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                        <svg width="12" height="13" viewBox="0 0 19 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 11.5V19.5H0V11.5H8ZM6 13.5H2V17.5H6V13.5ZM9 0L14.5 9H3.5L9 0ZM9 3.86L7.08 7H10.92L9 3.86ZM14.5 11C17 11 19 13 19 15.5C19 18 17 20 14.5 20C12 20 10 18 10 15.5C10 13 12 11 14.5 11ZM14.5 13C13.837 13 13.2011 13.2634 12.7322 13.7322C12.2634 14.2011 12 14.837 12 15.5C12 16.163 12.2634 16.7989 12.7322 17.2678C13.2011 17.7366 13.837 18 14.5 18C15.163 18 15.7989 17.7366 16.2678 17.2678C16.7366 16.7989 17 16.163 17 15.5C17 14.837 16.7366 14.2011 16.2678 13.7322C15.7989 13.2634 15.163 13 14.5 13Z"
                                fill="black" />
                        </svg>
                    </span>
                    <select
                        class="category-multiple mt-1 block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                        id="category" name="category[]" multiple="multiple">
                        @if (count($categories) == 0)
                            <p>No Category available</p>
                        @endif
                        @foreach ($categories as $category)
                            <option value="{{ $category->_id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- Tags and Keywords --}}
            {{-- Side by isde --}}
            <div class="mb-6 grid gap-6 px-6 pt-4 md:grid-cols-2">
                {{-- Tags --}}
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="website-admin">Tags</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                            <svg width="11" height="12" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.4 9.6L10.4 0.6C10 0.2 9.5 0 9 0H2C0.9 0 0 0.9 0 2V9C0 9.5 0.2 10 0.6 10.4L9.6 19.4C10 19.8 10.5 20 11 20C11.5 20 12 19.8 12.4 19.4L19.4 12.4C19.8 12 20 11.5 20 11C20 10.5 19.8 10 19.4 9.6ZM11 18L2 9V2H9L18 11M4.5 3C5.3 3 6 3.7 6 4.5C6 5.3 5.3 6 4.5 6C3.7 6 3 5.3 3 4.5C3 3.7 3.7 3 4.5 3ZM8.1 6.9L9.5 5.5L15 11L13.6 12.4L8.1 6.9ZM5.6 9.4L7 8L11 12L9.6 13.4L5.6 9.4Z"
                                    fill="black" />
                            </svg>
                            <select
                                class="tags-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                id="tags" name="tags[]"
                                style="background-color: red
                                " multiple="multiple">
                                @if (count($tags) == 0)
                                    <p>No Tag found</p>
                                @endif
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->_id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </span>
                    </div>
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="website-admin">Keywords</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                            <svg width="15" height="5" viewBox="0 0 23 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.5901 5.00009H12.6501C12.1665 3.63063 11.203 2.48286 9.93795 1.76944C8.67292 1.05603 7.19218 0.825327 5.77008 1.12009C3.48008 1.58009 1.62008 3.42009 1.14008 5.70009C0.945784 6.57727 0.950891 7.48687 1.15503 8.36181C1.35916 9.23675 1.75712 10.0547 2.31953 10.7553C2.88195 11.4559 3.59449 12.0214 4.40458 12.4099C5.21467 12.7984 6.10164 13.0001 7.00008 13.0001C8.24002 13.0001 9.44943 12.6154 10.4614 11.8989C11.4734 11.1825 12.2381 10.1696 12.6501 9.00009H13.0001L14.2901 10.2901C14.6801 10.6801 15.3101 10.6801 15.7001 10.2901L17.0001 9.00009L18.2901 10.2901C18.6801 10.6801 19.3201 10.6801 19.7101 10.2901L22.3001 7.68009C22.3933 7.58654 22.467 7.47543 22.517 7.35321C22.567 7.23098 22.5922 7.10005 22.5913 6.968C22.5904 6.83595 22.5633 6.7054 22.5116 6.58389C22.4599 6.46238 22.3846 6.35232 22.2901 6.26009L21.3001 5.29009C21.1001 5.10009 20.8501 5.00009 20.5901 5.00009ZM7.00008 10.0001C5.35008 10.0001 4.00008 8.65009 4.00008 7.00009C4.00008 5.35009 5.35008 4.00009 7.00008 4.00009C8.65008 4.00009 10.0001 5.35009 10.0001 7.00009C10.0001 8.65009 8.65008 10.0001 7.00008 10.0001Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <input
                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                            id="keywords" name="keywords" type="text">
                    </div>
                    {{-- Error Mesage --}}
                    @error('keywords')
                        <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- End tags and kyword --}}
            {{-- Language --}}
            <div class="mb-6 px-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="language">Language</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                        LA
                    </span>
                    <input
                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                        id="language" name="language" type="text" placeholder="">
                </div>
                {{-- Error Mesage --}}
                @error('language')
                    <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Access right --}}
            <div class="mb-6 px-6">
                <label class="mb-2 block text-sm font-medium text-gray-900" for="website-admin">Access Rights</label>
                <ul
                    class="w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center pl-3">
                            <input
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                id="public" name="example" type="radio" value="1" checked>
                            <label class="ml-2 w-full py-3 text-sm font-medium text-gray-900"
                                for="horizontal-list-radio-license">Public</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center pl-3">
                            <input
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                id="private" name="example" type="radio" value="2">
                            <label class="ml-2 w-full py-3 text-sm font-medium text-gray-900"
                                for="horizontal-list-radio-id">Private</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center pl-3">
                            <input
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                id="group" name="example" type="radio" value="3">
                            <label class="ml-2 w-full py-3 text-sm font-medium text-gray-900"
                                for="horizontal-list-radio-millitary">Group</label>
                        </div>
                    </li>
                </ul>
                <div id="box" style="display: none">
                    <select
                        class="grouping-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        id="grouping" name="grouping[]" multiple="multiple">
                        @foreach ($find as $find)
                            <option value="{{ $find->_id }}">{{ $find->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Upload kini  Single --}}
            <div class="mt-6 px-6">

                <label class="mb-2 block text-sm font-medium text-gray-900" for="file_upload">Upload
                    file</label>
                <input
                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-lg text-gray-900 focus:outline-none"
                    id="file_upload" name="file-upload" type="file">
                <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF
                    (MAX. 800x400px).</p>
                {{-- Error Mesage --}}
                @error('file-upload')
                    <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- end --}}

            {{-- Upload Kini Multplie --}}
            <div class="mt-6 px-6">

                <div class="flex w-full items-center justify-center">
                    <label
                        class="hover:bg-bray-800 flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100"
                        for="dropzone-file">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="mb-3 h-10 w-10 text-gray-400" aria-hidden="true" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)
                            </p>
                        </div>
                        <input class="hidden" id="dropzone-file" name="summary-upload" type="file" multiple />
                    </label>
                    {{-- Error Mesage --}}
                    @error('summary-upload')
                        <div class="mt-2 rounded-lg bg-red-50 p-4 text-sm text-red-800" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            {{-- Validation --}}
            <input id="topic_id" name="topic_id" type="hidden" value="4">


            {{-- Submmit --}}
            <button
                class="mt-8 ml-[45rem] w-full rounded-lg bg-cmblue px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-blue-800 sm:w-auto"
                type="submit">Save</button>
        </form>

    </section>



    <x-footer />


</x-app-layout>
