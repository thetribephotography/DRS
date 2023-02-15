<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            {{-- TABLE STARTS HERE --}}
            <div class=" p-8 relative overflow-x-auto shadow-md sm:rounded-lg">
                <h3 class="text-3xl mb-2">Actions</h3>
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
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                User
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Upload
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{route('upload.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Group
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{route('group.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                                <a href="/groups/id" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- TABLE ENDS HERE --}}

            {{-- TABLE STARTS HERE --}}

            <div class=" p-8 relative overflow-x-auto shadow-md sm:rounded-lg">
                <h3 class="text-3xl mb-2">Upload</h3>
                @if (count($uploads) == 0)
                  <div class="flex items-center bg-blue-500 text-white text-sm mb-4 font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>&nbsp;  &nbsp;You haven't made any upload</p>
                    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <a href="{{route('upload.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                  </div>
                @endif
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Authors
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Accessibility
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category/ies
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tags
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($uploads as $upload )
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <a href="/uploads/{{$upload->id}}" class="hover:underline">{{$upload->title}}</a>
                                </th>
                                <td class="px-6 py-4">
                                   @foreach ($upload->authors as $author )
                                       {{$author}}, <br>
                                   @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    {{$upload->type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$upload->acess_rights}}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($upload->category as $category )
                                        {{$category}}, <br>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    {{$upload->tags}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                    <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        {{-- TABLE STARTS HERE --}}

            <div class=" p-8 relative overflow-x-auto shadow-md sm:rounded-lg">
                <h3 class="text-3xl mb-2">Group</h3>
                {{-- @if (count($groups) == 0)
                  <div class="flex items-center bg-blue-500 text-white text-sm mb-4 font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>You don't belong or have created a group</p>
                    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <a href="{{route('group.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                  </div>
                @endif --}}
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Members
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                User4484989
                            </th>
                            <td class="px-6 py-4">
                                Group member 1, Group member 2
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                               The other group i created
                            </th>
                            <td class="px-6 py-4">
                                Group member 1, Group member 2
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                               FaintmeOne
                            </th>
                            <td class="px-6 py-4">
                                Group member 1, Group member 2
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- TABLE ENDS HERE --}}


            </div>
        </div>
    </div>
</div>

</x-app-layout>
