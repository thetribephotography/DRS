<x-app-layout :title="$title">
    {{-- Header start --}}
    <div class="h-[10rem] w-full bg-[#C2E7F4] pt-8 shadow">
        <div class="ml-[15rem]">
            <h2 class="mt-5 text-s3 font-bold text-cdblack">Create Group</h2>
            <p>Small talk</p>
        </div>
    </div>
    {{-- End Header --}}
    <section>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm">
                    <form class="p-6" action="{{ route('create.group') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-black"
                                for="name">Group Name</label>
                            <input
                                class="text-black-900 white:bg-gray-700 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm focus:border-blue-500 focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="Name" required>
                        </div>
                        <div class="mb-6">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-black"
                                for="members">Add Group Members</label>
                            <select
                                class="members-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                id="members" name="members[]" multiple="multiple">
                                @foreach ($users as $user)
                                    <option value=" {{ $user->_id }} "> {{ $user->email }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-black"
                                for="name">Group Description</label>
                            <input
                                class="text-black-900 white:bg-gray-700 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm focus:border-blue-500 focus:ring-blue-500"
                                id="group_desc" name="group_desc" type="textarea" placeholder="Enter a valid Decription">
                        </div>    
                        <button
                            class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-blue-800 dark:bg-blue-600 dark:focus:ring-blue-800 dark:hover:bg-blue-700 sm:w-auto"
                            type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <script>
        $(document).ready(function() {
        $('.members-multiple').select2({
            placeholder: "Select Group Members",
        });
    });
    </script> --}}
</x-app-layout>
