<x-app-layout :title="$title">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('All Groups') }}
        </h2>
    </x-slot>

    <section>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

                    {{-- TABLE STARTS HERE --}}
                    <div class="relative overflow-x-auto p-8 shadow-md sm:rounded-lg">
                        <h3 class="mb-2 text-3xl">Group List</h3>
                        <table class="w-full text-left text-sm text-gray-500">
                            <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                                <tr>
                                    <th class="px-6 py-3" scope="col">
                                        Name
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $lis)
                                <tr class="border-b bg-white">
                                    <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
                                        {{ $lis->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('group.leave', $lis->_id) }}" method="post">
                                            @csrf
                                            @method('post')
                                            <a class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                                href="{{ route('group.show_one', $lis->_id) }}">View</a>

                                            <button
                                                class="rounded-full bg-red-500 hover:bg-red-700 py-2 px-4 font-bold text-white"
                                                type="submit"> Delete</button>
                                            <!-- <a href="{{route('group.leave', $lis->_id )}}" class=" rounded-full bg-red-500 hover:bg-red-700
                                            text-white font-bold py-2 px-4 rounded-full">Leave Group</a> -->
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                {{-- <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Upload
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{route('user.upload')}}" class="bg-green-500 hover:bg-green-700 text-white
                                font-bold py-2 px-4 rounded-full">Create</a>
                                <a href="{{route('group.create')}}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                <a href="{{route('group.create')}}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
                                </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Group
                                    </th>
                                    <td class="px-6 py-4">
                                        <a href=" {{route ('group.create') }} "
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
                                        <a href=" {{route ('group.show_all') }} "
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                        <a href="#"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
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