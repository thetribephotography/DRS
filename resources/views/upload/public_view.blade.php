<x-app-layout :title="$title">
    <div class="h-screen pt-8" wire:poll>
        <div class="flex pt-8">

            {{-- @if (session()->has('message'))
                <h4 class="text-green-600"> {{session ('message') }} </h4>
            @endif --}}
            {{-- End --}}

            {{-- Main Container --}}
            <div class="flex h-full w-[50rem] flex-col lg:ml-[6rem]">
                <div class="mb-10 h-full w-full">
                    {{-- Top --}}
                    <div class="">
                        <h2 class="text-s4 font-semibold normal-case text-clblack">{{ $upload->title }}
                        </h2>
                        <a href="{{ route('user.profile.public', $upload->users->_id) }}">
                            <div class="mt-4 flex">
                                <img class="h-5 w-5 rounded-full"
                                    src="{{ $upload->users->profile_picture ? asset('storage/' . $upload->users->profile_picture) : asset('images/user.jpeg') }}">
                                <p class="ml-2 text-s8 font-regular text-clgray hover:underline">
                                    {{ $upload->users->name }}</p>
                            </div>
                        </a>
                        <p class="mt-4 text-s8 text-[#8F8F8F]">Lasted updated at
                            {{ $upload->updated_at->format('F d, Y') }}</p>
                        @if ($upload->access_id == 2)
                            <a id="reqeust-access-btn" href="#">
                                <button
                                    class="focus:ring-gray-100 mt-8 ml-[42rem] mb-2 inline-flex items-center rounded-lg bg-cmblue px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 hover:bg-b-hover"
                                    type="button">
                                    Request Access
                                </button>
                            </a>
                        @else
                            <a href="{{ route('download', $upload->_id) }}">
                                <button
                                    class="focus:ring-gray-100 mt-8 ml-[42rem] mb-2 inline-flex items-center rounded-lg bg-cmblue px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 hover:bg-b-hover"
                                    type="button">
                                    <svg class="h-4 w-4 -translate-x-2" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>
                                    Download
                                </button>
                            </a>
                        @endif
                    </div>

                    {{-- FIle Content --}}
                    <div class="my-6 w-full">
                        <x-file-content :upload="$upload" />
                    </div>
                    {{-- File Content --}}

                    {{-- Bottom --}}
                    <div class="w-full rounded-md bg-slate-100 pb-8 pt-4 pr-10 shadow">
                        <div class="pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Description</h3>
                            <p class="">{{ $upload->description }}</p>
                        </div>
                        <div class="mt-7 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Authors</h3>
                            <p class="">
                                @foreach ($upload->author as $author)
                                    {{ $author . ', ' }}
                                @endforeach
                            </p>

                        </div>
                        <div class="pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Publication Date</h3>
                            <p class="">{{ $upload->published_at->format('F d, Y') }}</p>
                        </div>
                        <div class="mt-6 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Upload Type</h3>
                            @if ($upload->topic_id == 1)
                                <p class="">Article</p>
                            @elseif ($upload->topic_id == 2)
                                <p class="">Software</p>
                            @elseif ($upload->topic_id == 3)
                                <p class="">Dataset</p>
                            @elseif ($upload->topic_id == 4)
                                <p class="">Workflow</p>
                            @endif
                        </div>

                        <div class="mt-7 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Language</h3>
                            <p class="">
                                @foreach ($upload->language as $language)
                                    {{ $language . ', ' }}
                                @endforeach
                            </p>
                        </div>

                        <div class="mt-7 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">File Size</h3>
                            <p class="">{{ round($upload->file_size / 1048576, 2) }} MB</p>
                        </div>




                        <div class="mt-4 pl-6" x-data="{ open: false }">
                            {{-- Button --}}
                            <button class="mr-2 mb-2 rounded-lg bg-cmblue px-5 py-2.5 text-sm font-medium text-white"
                                type="button" x-show="true" @click="open = !open">View info</button>

                            {{-- Table --}}
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg" x-show="open">
                                <table class="text-gray-500 w-full text-left text-sm">
                                    <thead class="text-gray-700 bg-gray-500 text-xs uppercase">
                                        <tr>
                                            <th class="px-6 py-3" scope="col">
                                                File Information
                                            </th>
                                            <th class="px-6 py-3" scope="col">
                                                Details
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b bg-white">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                File Name
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $upload->title }}
                                            </td>


                                        </tr>
                                        <tr class="bg-gray-50 border-b">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Authors
                                            </th>
                                            <td class="px-6 py-4">
                                                @foreach ($upload->author as $author)
                                                    {{ $author . ', ' }}
                                                @endforeach
                                            </td>

                                        </tr>
                                        <tr class="border-b bg-white">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Publication date
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $upload->published_at->format('F-d-Y') }}
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Description
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $upload->description }}
                                            </td>

                                        </tr>
                                        <tr class="border-b bg-white"">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Upload Type
                                            </th>
                                            <td class="px-6 py-4">

                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Categeories
                                            </th>
                                            <td class="px-6 py-4">
                                                @foreach ($upload->categories as $category)
                                                    {{ $category->name . ', ' }}
                                                @endforeach
                                            </td>

                                        </tr>
                                        </tr>
                                        <tr class="border-b bg-white"">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Tags
                                            </th>
                                            <td class="px-6 py-4">
                                                @foreach ($upload->tags as $tag)
                                                    {{ $tag->name . ', ' }}
                                                @endforeach
                                            </td>

                                        </tr>
                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Created at
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $upload->created_at->format('Y-m-d') }}
                                            </td>

                                        </tr>
                                        </tr>
                                        <tr class="border-b bg-white">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                Last Updated at
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $upload->updated_at->format('Y-m-d') }}
                                            </td>

                                        </tr>
                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                File Size
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ round($upload->file_size / 1048576, 2) }} MB
                                            </td>

                                        </tr>
                                        <tr class="border-b bg-white">
                                            <th class="text-gray-900 whitespace-nowrap px-6 py-4 font-medium"
                                                scope="row">
                                                License
                                            </th>
                                            <td class="px-6 py-4">
                                                @if ($upload->topic_id == 1)
                                                    Nil
                                                @endif
                                                {{ $upload->license }}
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            {{-- End table --}}
                        </div>

                        {{-- If upload isn't an article --}}
                        @if (!($upload->topic_id == 1))
                            {{-- Video --}}
                            <div class="mt-6">
                                <p class="text-center text-s6 font-semibold uppercase text-cdblack">Tutorial Video</p>
                                <video class="e mt-6 ml-[5rem]" src="{{ asset('storage/' . $upload->media) }}"
                                    height="400" width="650" controls></video>
                            </div>
                            {{-- Video End --}}
                        @endif
                    </div>
                </div>

                <div class="h-full w-full">
                    {{-- COMMENT SECTION --}}
                    <section class="bg-white py-8 lg:py-16">
                        <div class="mx-auto max-w-2xl pr-4">
                            <div class="mb-6 flex items-center justify-between">
                                <h2 class="text-gray-900 text-lg font-bold lg:text-2xl">Comments
                                    @if (!count($upload->comments) == 0)
                                        ({{ count($upload->comments) }})
                                    @endif
                                </h2>
                            </div>
                            <form class="mb-6" action="{{ route('upload.comment', $upload->_id) }}"
                                method="POST">
                                @csrf
                                @method('POST')
                                <div class="border-gray-200 mb-4 rounded-lg rounded-t-lg border bg-white py-2 px-4">
                                    <label class="sr-only" for="comment">Your comment</label>
                                    <textarea class="text-gray-900 w-full border-0 px-0 text-sm focus:outline-none focus:ring-0" id="comment"
                                        name="comment" rows="6" placeholder="Write a comment..." required></textarea>
                                </div>
                                <a href="{{ asset('uploadpath') }}" download="">
                                    <button
                                        class="ml-[33rem] items-center rounded bg-cmblue py-2.5 px-4 text-center font-medium text-white hover:bg-b-hover">
                                        Comment
                                    </button>
                                </a>
                            </form>

                            {{-- Success flash messaage --}}
                            {{-- @if (session()->has('message'))
                <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
                    <p class="font-bold"> {{ $message }} </p>
                </div>
              @endif --}}


                            @foreach ($upload->comments as $comment)
                                <article class="mb-6 rounded-lg bg-[#E9EDF1] p-6 text-base">
                                    <footer class="mb-2 flex items-center justify-between">
                                        <div class="flex items-center">
                                            <p class="text-gray-900 mr-3 inline-flex items-center text-sm"><img
                                                    class="mr-2 h-6 w-6 rounded-full"
                                                    src="{{ $comment->user->profile_picture ? asset('storage/' . $comment->user->profile_picture) : asset('images/user.jpeg') }}"
                                                    alt="">
                                                {{ $comment->user->name }} </p>
                                            <p class="text-gray-600 text-sm">
                                                {{ $comment->created_at->format('F d, Y') }}</p>
                                        </div>
                                        <button
                                            class="text-gray-400 focus:ring-gray-50 hover:bg-gray-100 inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium focus:outline-none focus:ring-4"
                                            id="drop-comment-button" data-dropdown-toggle="comment-setting"
                                            type="button">
                                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                </path>
                                            </svg>
                                            <span class="sr-only">Comment settings</span>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div class="divide-gray-100 z-10 hidden w-36 divide-y rounded bg-white shadow">
                                            {{-- <ul class="text-gray-700 py-1 text-sm">
                                                @if ($comment->user_id == Auth::user()->_id)
                                                    <li>
                                                        <a class="hover:bg-gray-100 block py-2 px-4"
                                                            href="{{ route('comment.edit', $comment->_id) }}">Edit</a>
                                                    </li>
                                                @endif
                                                @if (Auth::user()->hasRole('admin') || $upload->user_id == Auth::user()->_id)
                                                    <form action=" {{ route('comment.delete', $comment->_id) }} "
                                                        method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <li>
                                                            <button class="hover:bg-gray-100 block py-2 px-4"
                                                                type="submit">Delete</button>
                                                        </li>
                                                    </form>
                                                    <form action=" {{ route('comment.report', $comment->_id) }} "
                                                        method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <li>
                                                            <button class="hover:bg-gray-100 block py-2 px-4"
                                                                type="submit">Report</button>
                                                        </li>
                                                    </form>
                                                @endif
                                            </ul> --}}
                                        </div>
                                    </footer>
                                    <p class="text-gray-500"> {{ $comment->content }} </p>
                                    <div class="mt-4 flex items-center space-x-4">
                                        <button class="text-gray-500 flex items-center text-sm hover:underline"
                                            type="button"
                                            onclick="Livewire.emit('openModal', 'comment-reply', {{ json_encode(['data' => $comment->_id]) }})">
                                            <svg class="mr-1 h-4 w-4" aria-hidden="true" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                </path>
                                            </svg>
                                            Reply
                                        </button>
                                    </div>
                                </article>

                                {{-- FOR COMMENTS OF COMMENT --}}
                                @foreach ($comment->replies as $reply)
                                    <article class="mb-6 ml-6 rounded-lg bg-white p-6 text-base lg:ml-12">
                                        <footer class="mb-2 flex items-center justify-between">
                                            <div class="flex items-center">
                                                <p class="text-gray-900 mr-3 inline-flex items-center text-sm"><img
                                                        class="mr-2 h-6 w-6 rounded-full"
                                                        src="{{ $reply->user->profile_picture ? asset('storage/' . $reply->user->profile_picture) : asset('images/user.jpeg') }}"
                                                        alt="">{{ $reply->user->name }}</p>
                                                <p class="text-gray-600 text-sm">
                                                    {{ $reply->created_at->format('F d, Y') }}</p>
                                            </div>
                                            <button
                                                class="text-gray-400 focus:ring-gray-50 hover:bg-gray-100 inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium focus:outline-none focus:ring-4"
                                                id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                                type="button">
                                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                                <span class="sr-only">Comment settings</span>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div class="divide-gray-100 z-10 w-36 divide-y rounded bg-white shadow"
                                                id="dropdownComment2">
                                                <ul class="text-gray-700 py-1 text-sm"
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        <a class="hover:bg-gray-100 block py-2 px-4"
                                                            href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="hover:bg-gray-100 block py-2 px-4"
                                                            href="#">Remove</a>
                                                    </li>
                                                    <li>
                                                        <a class="hover:bg-gray-100 dark:hover:bg-gray-600 block py-2 px-4 dark:hover:text-white"
                                                            href="#">Report</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </footer>
                                        <p class="text-gray-500">{{ reply->content }}</p>
                                        <div class="mt-4 flex items-center space-x-4">
                                        </div>
                                    </article>
                                @endforeach
                                {{-- END FOR COMMENTS OF COMMENT --}}
                            @endforeach
                        </div>
                    </section>

                    {{-- END COMMENT KINI --}}

                </div>
            </div>






            {{-- Side Container --}}
            <div class="ml-[12rem] hidden h-[40rem] w-[23rem] flex-col shadow lg:flex">
                <div class="h-40 w-full rounded-t-lg bg-cmblue px-8 py-4">
                    <h4 class="pt-2 pl-2 font-medium text-white">Metrics</h4>
                    <div class="mt-4 flex justify-evenly">
                        <div class="text-center text-white">
                            <h4>{{ $upload->views }}</h4>
                            <p> Views</p>
                        </div>
                        <div class="text-center text-white">
                            @if ($upload->downloads == 0)
                                <h4>0</h4>
                            @endif
                            <h4>{{ $upload->downloads }}</h4>
                            Downloads
                        </div>

                    </div>
                </div>
                <div class="mt-4 h-full w-full rounded-t-lg bg-cmblue px-2">
                    {{-- Categories --}}
                    <div class="ml-6 pt-6 text-left">
                        <a class="text-decoration-none" href="{{ route('category.index') }}">
                            <h4 class="mb-2 font-medium text-white hover:underline">Categories</h4>
                        </a>
                        <div class="bg mt-2 text-white">

                            @foreach ($upload->categories as $category)
                                <a class="" href="{{ route('category.show', $category->slug) }}">
                                    <span
                                        class="mr-2 inline-block rounded-full border border-white px-2.5 py-0.5 text-xs font-medium transition duration-300 ease-in-out hover:bg-white hover:text-cmblue">{{ $category->name }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tag --}}
                    <div class="mt-6 ml-6 text-left">
                        <a href="{{ route('tag.index') }}">
                            <h4 class="mb-2 font-semibold text-white hover:underline">Tags</h4>
                        </a>
                        <div class="bg mt-2 text-white">
                            @foreach ($upload->tags as $tag)
                                <a class="s" href="{{ route('tag.show', $tag->slug) }}">
                                    <span
                                        class="mr-2 inline-block rounded-full border border-white px-2.5 py-0.5 text-xs font-medium transition duration-300 ease-in-out hover:bg-white hover:text-cmblue">{{ $tag->name }}</span>
                                </a>
                            @endforeach
                            {{-- <span
                                class="mr-2 rounded-full border border-white px-2.5 py-0.5 text-xs font-medium">Open-source
                                development</span> --}}
                        </div>
                    </div>

                    {{-- Keyword --}}
                    <div class="mt-10 ml-6 h-full text-left text-white">
                        <h4 class="mb-2 font-semibold text-white">Keywords</h4>
                        <div class="bg mt-2">
                            @foreach ($upload->keywords as $keyword)
                                <span
                                    class="mr-2 inline-block rounded-full border border-white px-2.5 py-0.5 text-xs font-medium transition duration-300 ease-in-out hover:bg-white hover:text-cmblue">{{ $keyword }}</span>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <x-footer />


        <script>
            //Alert when request access btn is clciked
            const requestButton = document.getElementById("reqeust-access-btn");
            requestButton.addEventListener("click", () => {
                alert("Requested Sucessfully");
            });
        </script>
    </div>
</x-app-layout>
