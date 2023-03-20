<x-app-layout :title="$title">

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Your Upload List') }}
        </h2>
    </x-slot>

    <div class="container ml-5 mr-0 pt-4 pl-4 pr-0">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="white:bg-gray-700 bg-gray-50 text-xs uppercase text-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="py-3 px-6" scope="col">
                            Title
                        </th>
                        <th class="py-3 px-6" scope="col">
                            Description
                        </th>
                        <th class="py-3 px-6" scope="col">
                            Category
                        </th>
                        <th class="py-3 px-6" scope="col">
                            Language
                        </th>
                        <th class="py-3 px-6" scope="col">
                            Access Rights
                        </th>
                        <th class="py-3 px-6" scope="col">
                            Uploaded-Date
                        </th>
                        <th class="py-3 px-6" scope="col">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $list)
                        @if ($list->count() > 0)
                            <tr class="white:bg-gray-900 gray:border-gray-700 border-b bg-white">
                                <th class="whitespace-nowrap py-4 px-6 font-medium text-gray-900 dark:text-black"
                                    scope="row">
                                    {{ $list->title }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $list->description }}
                                </td>
                                <td class="py-4 px-6">
                                    @if ($list->topic_id == 1)
                                        Publication
                                    @elseif ($list->topic_id == 2)
                                        Software
                                    @elseif ($list->topic_id == 3)
                                        Dataset
                                    @elseif ($list->topic_id == 4)
                                        Webflow
                                    @else
                                        No Category
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    {{ $list->language }}
                                </td>
                                <td class="py-4 px-6">
                                    @if ($list->access_id == 1)
                                        Public
                                    @elseif ($list->access_id == 2)
                                        Private
                                    @elseif ($list->access_id == 3)
                                        Grouped
                                    @else
                                        No Group
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    {{ $list->published_at }}
                                    {{-- ->format('D/M/Y') --}}
                                </td>
                                <td class="py-4 px-6">
                                    <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                        href="{{ route('upload.show_one', $list->_id) }}">Edit</a>
                                </td>
                            </tr>
                        @else
                            <p>No Uploads Yet</p>
                        @endif
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
