<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Group') }}
        </h2>    
    </x-slot>

    <div class="container px-4 px-4 mb-4 mt-4">
          <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="w-full max-w-sm p-4 bg-gray border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 gray:bg-gray-800 gray:border-gray-700">

<form>
  <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Group Name</label>
    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Input Name" required>
  </div>
  <div class="mb-6">
    <label for="members" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Add Group Members</label>
    <input type="text" id="members" multiple class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Input Group Members" required>
  </div>

  <input type="text" data-role="taginput" data-tag-trigger="Space" multiple>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

        </div>
    </div>
    </div>
    </div>
</x-app-layout>