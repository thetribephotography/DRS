<x-app-layout :title="$title">

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Software Upload Form') }}
        </h2>
    </x-slot>


    <div class="container mb-4 mt-4 px-4 px-4">

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-0">
                    {{-- <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      </div> --}}
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form method="POST" action="{{ route('uploads.publish') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4">

                                        <label class="block text-sm font-medium text-gray-700"
                                            for="title">Title</label>
                                        <input
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="title" name="title" type="text" autocomplete="given-name">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="description">Description</label>
                                        <textarea
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="description" name="description" rows="3"
                                            placeholder="Brief description for your Project. URLs are hyperlinked."></textarea>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="date">Publication Date</label>
                                        <div class="relative">
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-3 flex items-center pl-3">
                                                <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input
                                                class="white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 dark:text-dark white:focus:ring-blue-500 white:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-gray-900 focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                                                id="date" name="date" type="date" placeholder="DD/MM/YYYY">
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">Note: Date of first publication.</p>
                                    </div>

                                    <div class="col-span-6">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="category">Category</label>
                                        <select
                                            class="category-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="category" name="category[]" multiple="multiple">
                                            @if (count($categories) == 0)
                                                <p>No Category available</p>
                                            @endif
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-4">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="tags">Tags</label>
                                        <select
                                            class="tags-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="tags" name="tags[]" multiple="multiple">
                                            @if (count($tags) == 0)
                                                <p>No Tag found</p>
                                            @endif
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="language">Language</label>
                                        <input
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="language" name="language" type="text">
                                        <p class="mt-2 text-sm text-gray-500">Primary Language of Upload</p>
                                    </div>

                                    <div class="col-span-6">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="author">Author(s)</label>
                                        <input
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            id="author" name="author" type="text">
                                    </div>



                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700"
                                            for="keywords">KeyWords</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <input
                                                class="js-example-basic-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                                id="keywords" name="keywords" multiple="multiple">

                                        </div>
                                    </div>


                                    <div class="col-span-6 sm:col-span-6">
                                        <hr
                                            class="my-4 mx-auto h-1 w-48 rounded border-0 bg-gray-100 dark:bg-gray-700 md:my-10">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <fieldset>
                                            <legend class="contents text-base font-medium text-gray-900">Access Rights
                                            </legend>
                                            <p class="text-sm text-gray-500">Please Choose how Visible your Data will be
                                                on the Internet</p>

                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-center">
                                                    <input
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                        id="push-everything" name="example" type="radio"
                                                        value="1" checked>
                                                    <label class="ml-3 block text-sm font-medium text-gray-700"
                                                        for="push-everything">Public</label>
                                                </div>
                                                <p class="text-sm text-gray-500"> Anyone Can View and Access this</p>

                                                <div class="flex items-center">
                                                    <input
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                        id="push-email" name="example" type="radio"
                                                        value="2">
                                                    <label class="ml-3 block text-sm font-medium text-gray-700"
                                                        for="push-email">Private</label>
                                                </div>
                                                <p class="text-sm text-gray-500"> Only You Can View and Access this</p>
                                                <div class="flex items-center">
                                                    <input
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                        id="group" name="example" type="radio" value="3">
                                                    <label class="ml-3 block text-sm font-medium text-gray-700"
                                                        for="group">Group</label>
                                                </div>
                                                <p class="text-sm text-gray-500"> Only Your Selected Group members can
                                                    View and Access this</p>
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
                                        </fieldset>
                                    </div>


                                    <div class="col-span-6 sm:col-span-6">
                                        <hr
                                            class="my-4 mx-auto h-1 w-48 rounded border-0 bg-gray-100 dark:bg-gray-700 md:my-10">
                                    </div>


                                    <div class="col-span-6 mt-10 sm:col-span-4">
                                        {{-- <div class="flex text-sm text-gray-600"> --}}
                                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300"
                                            for="large_size">Upload Code File</label>
                                        <input
                                            class="white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-lg text-gray-900 focus:outline-none dark:text-gray-400"
                                            id="file-upload" name="file-upload" type="file">

                                        {{-- <p class="pt-3 mb-2 text-sm text-gray-500 dark:text-gray-400">It is Advisable you zip the folder before Uploading for Better Consumption</p> --}}
                                        {{-- </div> --}}
                                    </div>




                                    <div class="col-span-6 sm:col-span-4">
                                        <div class="flex w-full items-center justify-center">
                                            <label
                                                class="white:hover:bg-bray-800 white:bg-gray-700 white:border-gray-600 white:hover:border-gray-500 white:hover:bg-gray-600 flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100"
                                                for="dropzone-file">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="mb-3 h-10 w-10 text-gray-400" aria-hidden="true"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                        </path>
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                            class="font-semibold">Click to upload</span> or drag and
                                                        drop</p>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click the
                                                        Icon to Upload a Video or Picture explaining your Publication
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG
                                                        or GIF (MAX. 800x400px)</p>
                                                </div>
                                                <input class="hidden" id="dropzone-file" name="summary-upload"
                                                    type="file" />
                                            </label>
                                        </div>
                                    </div>

                                    <input id="topic_id" name="topic_id" type="hidden" value="2">



                                </div>


                                <div class="px-4 py-3 text-right sm:px-6">
                                    <button
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                        type="submit">Save</button>
                                </div>

                            </div>



                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>

    {{-- <script>
   $(document).ready(function() {
        $('.category-multiple').select2({
            placeholder: "Select a Category",
        });

        $('.tags-multiple').select2({
            placeholder: "Select a Tag",
            tags: true
        });
    });
</script> --}}


</x-app-layout>
