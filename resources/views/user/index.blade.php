<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{-- {{ __('Dashboard') }} --}}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!
                <br> <br>
            </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-orange-500 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Sliver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 ">Edit</a>
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-50">
                        <th scope="row" class="px-6 py-4 font-medium ">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

                    {{-- ACTIONS --}}
                <br>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-bold mt-0 mb-6">Actions</h1>
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold mb-8"> User</h3>
                        {{-- <a href="{{route('user.view-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Profile</a>
                        <a href="{{route('user.edit-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit profile</a>
                        <form action="{{route('user.delete-account')}}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Delete Account
                            </button>
                        </form> --}}

                    </div>
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold mb-8">Upload</h3>
                        <a href="{{route('user.upload') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Upload</a>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold mb-8">Group</h3>
                        <a href="{{route('group.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Create Group</a>
                        {{-- <a href="{{route('group.view-group')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View all groups</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</x-app-layout>
