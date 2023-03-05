<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('All Groups') }}
    </h2>
</x-slot>

        <section>
            <div class="py-12">
           <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                        {{-- TABLE STARTS HERE --}}
            <div class=" p-8 relative overflow-x-auto shadow-md sm:rounded-lg">
                <h3 class="text-3xl mb-2">Group List</h3>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $lis)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$lis->name}}
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View</a>
                                <form action="{{route('group.leave' _id)}}" method="post">
                                <a href="{{route('group.leave')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Leave Group</a>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Upload
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{route('user.upload')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Group
                            </th>
                            <td class="px-6 py-4">
                                <a href=" {{route ('group.create') }} " class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                                <a href=" {{route ('group.show_all') }} " class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>

        </div>
           </div>
            </div>
        </section>

</x-app-layout>