<x-app-layout :title="$title">

    <x-slot name="header">
        Show One
    </x-slot>
    <section class="bg-white py-8 lg:py-16">
        <div>
            <p class="mb-2 text-center text-3xl">{{ $upload->title }}</p>
        </div>
        <div class="mx-auto max-w-2xl px-4">
            <div class="mb-6 flex items-center justify-between">
                <img class="... h-48 w-96 object-cover" src=" {{ asset('images/upload.png') }}  ">
            </div>
            <div class="mb-6 items-center justify-between bg-gray-200 p-6">
                <p><b>Description:</b> {{ $upload->description }} </p>
                <p><b>Authors:</b {{ $upload->author }} </p>

                <p><b>Access rights:</b>
                    @if ($upload->access_id == 1)
                        Public Access
                    @elseif ($upload->access_id == 2)
                        Private Access
                    @elseif ($upload->access_id == 3)
                        Group Access
                    @else
                        Error statement
                    @endif
                </p>
                {{-- <p><b>Type : </b> {{$upload->type}} </p> --}}
            </div>
        </div>
    </section>


    {{-- COMMENT KINI --}}
    <section class="bg-white py-8 lg:py-16">
        <div class="mx-auto max-w-2xl px-4">
            <div class="mb-6 flex items-center justify-between">
                <h2 class="text-lg font-bold text-gray-900 lg:text-2xl">Comments
                    @if (!count($upload->comments) == 0)
                        ({{ count($upload->comments) }})
                    @endif
                </h2>
            </div>
            <form class="mb-6" action="{{ route('upload.comment', $upload->_id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-white py-2 px-4">
                    <label class="sr-only" for="comment">Your comment</label>
                    <textarea class="w-full border-0 px-0 text-sm text-gray-900 focus:outline-none focus:ring-0" id="comment"
                        name="comment" rows="6" placeholder="Write a comment..." required></textarea>
                </div>
                <button
                    class="items-center rounded bg-blue-500 py-2.5 px-4 text-center font-medium text-white hover:bg-blue-800"
                    type="submit">
                    Post comment
                </button>
            </form>

            {{-- Success flash messaage --}}
            {{-- @if (session()->has('message'))
                <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
                    <p class="font-bold"> {{ $message }} </p>
                </div>
              @endif --}}


            @foreach ($comments as $comment)
                <article class="mb-6 rounded-lg bg-white p-6 text-base">
                    <footer class="mb-2 flex items-center justify-between">
                        <div class="flex items-center">
                            <p class="mr-3 inline-flex items-center text-sm text-gray-900"><img
                                    class="mr-2 h-6 w-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                                {{ $comment->user->name }} </p>
                            <p class="text-sm text-gray-600">{{ $comment->created_at->format('F d, Y') }}</p>
                        </div>
                        <button
                            class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50"
                            id="drop-comment-button" data-dropdown-toggle="comment-setting" type="button">
                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow"
                            id="comment-setting">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="drop-comment-button">
                                @if ($comment->user_id === Auth::user()->_id)
                                    <li wire:loading.remove>
                                        <a class="block py-2 px-4 hover:bg-gray-100"
                                            href="{{ route('comment.edit', $comment->_id) }}">Edit</a>
                                    </li>
                                @endif
                                @if (Auth::user()->hasRole('admin') || $upload->user_id == Auth::user()->_id)
                                    <form action=" {{ route('comment.delete', $comment->_id) }} " method="post">
                                        @csrf
                                        @method('POST')
                                        <li>
                                            <button class="block py-2 px-4 hover:bg-gray-100"
                                                type="submit">Delete</button>
                                        </li>
                                    </form>
                                    <form action=" {{ route('comment.report', $comment->_id) }} " method="post">
                                        @csrf
                                        @method('POST')
                                        <li>
                                            <button class="block py-2 px-4 hover:bg-gray-100"
                                                type="submit">Report</button>
                                        </li>
                                    </form>
                                @endif
                            </ul>
                        </div>
                    </footer>
                    <p class="text-gray-500"> {{ $comment->content }} </p>
                    <div class="mt-4 flex items-center space-x-4">
                        <button class="flex items-center text-sm text-gray-500 hover:underline" type="button">
                            <svg class="mr-1 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>

                {{-- FOR COMMENTS OF COMMENT --}}
                <article class="mb-6 ml-6 rounded-lg bg-white p-6 text-base lg:ml-12">
                    <footer class="mb-2 flex items-center justify-between">
                        <div class="flex items-center">
                            <p class="mr-3 inline-flex items-center text-sm text-gray-900"><img
                                    class="mr-2 h-6 w-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="Jese Leos">Jese Leos</p>
                            <p class="text-sm text-gray-600"><time title="February 12th, 2022" pubdate
                                    datetime="2022-02-12">Feb. 12, 2022</time></p>
                        </div>
                        <button
                            class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50"
                            id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2" type="button">
                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow"
                            id="dropdownComment2">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a class="block py-2 px-4 hover:bg-gray-100" href="#">Edit</a>
                                </li>
                                <li>
                                    <a class="block py-2 px-4 hover:bg-gray-100" href="#">Remove</a>
                                </li>
                                <li>
                                    <a class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        href="#">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p class="text-gray-500">Much appreciated! Glad you liked it ☺️</p>
                    <div class="mt-4 flex items-center space-x-4">
                        <button class="flex items-center text-sm text-gray-500 hover:underline" type="button">
                            <svg class="mr-1 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
                {{-- END FOR COMMENTS OF COMMENT --}}
            @endforeach
        </div>
    </section>

    {{-- END COMMENT KINI --}}

    {{-- For dropddown kini to work --}}
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</x-app-layout>
