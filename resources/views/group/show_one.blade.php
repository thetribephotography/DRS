<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Group') }}
    </h2>
</x-slot>

        <section>
            <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm">
                    <form action="" method="POST" class="p-6">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Group Name</label>
                          <input value=" {{$one->name}} " name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700" placeholder="Name" required>
                        </div>
                        <div class="mb-6">
                          <label for="members" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Add Group Members</label>
                          <select name="members[]" id="members" class="members-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  " multiple="multiple">
                            @foreach ($one->group_members as $user)
                                <option value=" {{$user->_id}} "> {{$user->email}} </option>    
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </section>


</x-app-layout>