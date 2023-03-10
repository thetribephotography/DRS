<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Comment
        </h2>
    </x-slot>


    <form action="{{ route ('comment.update', $comments->_id ) }}" method="POST" class="mb-6">
                @csrf
                @method('POST')
                  <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                      <label for="comment" class="sr-only">Your comment</label>
                      <textarea name="comment" id="comment" rows="6"
                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                         required> {{$comments->content}} </textarea>
                  </div>
                  <button type="submit"
                      class=" items-center rounded py-2.5 px-4 font-medium text-center text-white bg-blue-500 hover:bg-blue-800">
                      Update comment
                  </button>
              </form>


</x-app-layout>