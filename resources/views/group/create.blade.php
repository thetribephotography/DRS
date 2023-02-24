<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Group
        </h2>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm">
                    <form action="" method="POST" class="p-6">
                        @csrf
                        <div class="mb-6">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Group Name</label>
                          <input  name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700" placeholder="Name" required>
                        </div>
                        <div class="mb-6">
                          <label for="members" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Add Group Members</label>
                          <input name="members" type="text" id="members" multiple="multiple" class="members-multiple bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700" required>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
        $('.members-multiple').select2({
            placeholder: "Select Group Members",
        });

    });
    </script>
</x-app-layout>