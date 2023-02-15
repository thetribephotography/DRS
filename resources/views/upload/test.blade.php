<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Test Form
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('uploader') }}" enctype="multipart/form-data" class="block p-6  rounded-lg shadow-lg bg-white max-w-md">
        @csrf


        <div class="form-group mb-6">
            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Title" name="title" value="{{old('title')}}">
          </div>
          <div class="mb-6">
            <textarea
            class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="exampleFormControlTextarea13"
            rows="3"
            placeholder="Description" name="description"
          >{{old('description')}}</textarea>
          </div>
          <div class="form-group mb-6">
            <input type="file" name="file_upload" id="file_upload" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
              >
          </div>
          @error('file_upload')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Send</button>
    </form>


    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
</x-app-layout>
