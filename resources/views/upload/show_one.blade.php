<x-app-layout :title="$title">

    <div class="h-screen pt-8">
        <div class="flex pt-8">

            <a href="{{ url()->previous() }}">
                <div class="absolute left-24 h-10 w-10 rounded-lg border border-clgray hover:bg-gray-300">
                    <svg class="h-5 w-5 translate-y-2.5 translate-x-2.5 text-clgray" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </div>
            </a>
            {{-- Main Container --}}
            <div class="ml-[15rem] flex h-full w-[50rem] flex-col">
                <div class="mb-10 h-[50rem] w-full">
                    {{-- Top --}}
                    <div class="">
                        <h2 class="text-s4 font-bold normal-case text-clblack">{{ $upload->title }}
                        </h2>
                        <a href="#">
                            <div class="mt-4 flex">
                                <img class="h-5 w-5 rounded-full" src="{{ asset('images/thanos.jpg') }}">
                                <p class="ml-2 text-s8 font-regular text-clgray">{{ $upload->user->name }}</p>
                            </div>
                        </a>
                        <p class="mt-4 text-s8 text-[#8F8F8F]">Lasted updated at
                            {{ $upload->created_at->format('F d, Y') }}</p>
                        <button
                            class="mt-8 ml-[42rem] mb-2 inline-flex items-center rounded-lg bg-cmblue px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-gray-100 hover:bg-blue-400"
                            type="button">
                            <svg class="h-4 w-4 -translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                            Download
                        </button>
                    </div>
                    {{-- Bottom --}}
                    <div class="w-full rounded-md bg-slate-100 pb-8 pt-4 pr-10 shadow">
                        <div class="pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Description</h3>
                            <p class="">{{ $upload->description }}</p>
                        </div>
                        <div class="mt-7 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Authors</h3>
                            <p class="">{{ $upload->author }}</p>
                        </div>
                        <div class="mt-7 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">Language</h3>
                            <p class="">{{ $upload->language }}</p>
                        </div>
                        <div class="mt-7 pl-6 text-s8 text-clgray">
                            <h3 class="mt-4 font-semibold uppercase">File Size</h3>
                            <p class="">{{ $upload->file_size }}KB</p>
                        </div>
                    </div>
                </div>

                <div class="h-full w-full">
                    {{-- COMMENT SECTION --}}
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
                                <a href="{{ asset('uploadpath') }}" download="">
                                    <button
                                        class="ml-[33rem] items-center rounded bg-cmblue py-2.5 px-4 text-center font-medium text-white hover:bg-blue-500">
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
                                            <p class="mr-3 inline-flex items-center text-sm text-gray-900"><img
                                                    class="mr-2 h-6 w-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                    alt="">
                                                {{ $comment->user->name }} </p>
                                            <p class="text-sm text-gray-600">
                                                {{ $comment->created_at->format('F d, Y') }}</p>
                                        </div>
                                        <button
                                            class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-50 hover:bg-gray-100"
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
                                        <div class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow">
                                            <ul class="py-1 text-sm text-gray-700">
                                                @if ($comment->user_id === Auth::user()->_id)
                                                    <li wire:loading.remove>
                                                        <a class="block py-2 px-4 hover:bg-gray-100"
                                                            href="{{ route('comment.edit', $comment->_id) }}">Edit</a>
                                                    </li>
                                                @endif
                                                @if (Auth::user()->hasRole('admin') || $upload->user_id == Auth::user()->_id)
                                                    <form action=" {{ route('comment.delete', $comment->_id) }} "
                                                        method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <li>
                                                            <button class="block py-2 px-4 hover:bg-gray-100"
                                                                type="submit">Delete</button>
                                                        </li>
                                                    </form>
                                                    <form action=" {{ route('comment.report', $comment->_id) }} "
                                                        method="post">
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
                                        <button class="flex items-center text-sm text-gray-500 hover:underline"
                                            type="button">
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
                            @endforeach
                        </div>
                    </section>

                    {{-- END COMMENT KINI --}}

                </div>
            </div>














            {{-- Side Container --}}
            <div class="ml-6 flex h-[40rem] w-[13rem] flex-col shadow">
                <div class="h-40 w-full">
                    <h4 class="pt-2 pl-2 font-semibold">Metrics</h4>
                    <div class="mt-2 flex">
                        {{-- <div class="text-center">
                            Views
                        </div>
                        <div class="text-center">
                            Downloads
                        </div> --}}

                    </div>
                </div>
                <div class="mt-4 h-full w-full bg-[#F5F5F5] px-2">
                    {{-- Categories --}}
                    <div class="pt-2">
                        <h4 class="mb-2 font-semibold text-cdblack">Categories:</h4>
                        <div class="bg mt-2">
                            <ul class="max-w-md list-inside list-disc space-y-1">


                                <li>
                                    Web Dev
                                </li>
                                <li>
                                    Hmm
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Tag --}}
                    <div class="mt-6">
                        <h4 class="mb-2 font-semibold text-cdblack">Tags:</h4>
                        <div class="bg mt-2">
                            <span
                                class="mr-2 rounded-full border border-clblack bg-white px-2.5 py-0.5 text-xs font-medium">Software
                                Development Methodology</span>

                            <span
                                class="mr-2 rounded-full border border-clblack px-2.5 py-0.5 text-xs font-medium">Security</span>
                            <span
                                class="mr-2 rounded-full border border-clblack px-2.5 py-0.5 text-xs font-medium">Open-source
                                development</span>
                        </div>
                    </div>

                    {{-- Keyword --}}
                    <div class="mt-6">
                        <h4 class="mb-2 font-semibold text-cdblack">Keywords</h4>
                        <div class="bg mt-2">
                            <span
                                class="mr-2 rounded-full border border-clblack bg-white px-2.5 py-0.5 text-xs font-medium">Waste</span>

                            <span
                                class="mr-2 rounded-full border border-clblack px-2.5 py-0.5 text-xs font-medium">Resorce</span>
                            <span
                                class="mr-2 rounded-full border border-clblack px-2.5 py-0.5 text-xs font-medium">Red</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8 h-full w-full">
                    <h4 class="my-8">Related Uploads</h4>
                    <p>Nil</p>
                </div>
            </div>
        </div>


        <x-footer />
    </div>
</x-app-layout>
