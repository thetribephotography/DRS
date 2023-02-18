<x-guest-layout>
    <section class="bg-white py-8 lg:py-16">
        <div>
            <p class=" text-3xl mb-2 text-center">{{$upload->title}}</p>
        </div>
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <img src=" {{ asset('images/upload.png') }}  " class="object-cover h-48 w-96 ...">
            </div>
            <div class="p-6 bg-gray-200 justify-between items-center mb-6">
                <p><b>Description:</b> {{$upload->description}} </p>
                <p><b>Authors:</b>
                    @foreach ($upload->authors as $author )
                        {{ $author }},
                    @endforeach
                </p>
                <p><b>Access rights:</b> {{$upload->acess_rights}} </p>
                <p><b>Type : </b> {{$upload->type}} </p>
            </div>
        </div>
    </section>


        {{-- COMMENT KINI --}}
        <section class="bg-white py-8 lg:py-16">
            <div class="max-w-2xl mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                  <h2 class="text-lg lg:text-2xl font-bold text-gray-900 ">Comments
                    @if ( !count($upload->comments) == 0 )
                        ({{count($upload->comments)}})
                    @endif
                  </h2>
                </div>
              <form action="/uploads/{{$upload->_id}}/comment" method="POST" class="mb-6">
                @csrf
                  <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                      <label for="comment" class="sr-only">Your comment</label>
                      <textarea name="comment" id="comment" rows="6"
                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                          placeholder="Write a comment..." required></textarea>
                  </div>
                  <button type="submit"
                      class=" items-center rounded py-2.5 px-4 font-medium text-center text-white bg-blue-500 hover:bg-blue-800">
                      Post comment
                  </button>
              </form>

              {{-- Success flash messaage --}}
              @if (session()->has('message'))
                <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
                    <p class="font-bold"> {{ $message }} </p>
                </div>
              @endif


              @foreach ($comments as $comment )
                <article class="p-6 mb-6 text-base bg-white rounded-lg">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                    alt=""> {{ $comment->user->name }}  </p>
                            <p class="text-sm text-gray-600">{{ $comment->created_at->format('F d, Y') }}</p>
                        </div>
                        <button id="drop-comment-button"  data-dropdown-toggle="comment-setting"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="comment-setting"
                            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm text-gray-700"
                                aria-labelledby="drop-comment-button">
                                @if ( Auth::user()->_id == $comment->user->_id )
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Edit</a>
                                    </li>
                                @endif
                                @if(Auth::user()->hasRole('admin'))
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Delete</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="uploads/{id}/report" class="block py-2 px-4 hover:bg-gray-100 ">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p class="text-gray-500"> {{ $comment->content }} </p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm text-gray-500 hover:underline ">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            Reply
                        </button>
                    </div>
                </article>

                {{-- FOR COMMENTS OF COMMENT --}}
                {{-- <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="Jese Leos">Jese Leos</p>
                            <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-12"
                                    title="February 12th, 2022">Feb. 12, 2022</time></p>
                        </div>
                        <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment2"
                            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm text-gray-700 "
                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100">Remove</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p class="text-gray-500">Much appreciated! Glad you liked it ☺️</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm text-gray-500 hover:underline">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            Reply
                        </button>
                    </div>
                </article> --}}
                {{-- END FOR COMMENTS OF COMMENT --}}
              @endforeach
            </div>
          </section>

        {{-- END COMMENT KINI --}}

        {{-- For dropddown kini to work --}}
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</x-guest-layout>

