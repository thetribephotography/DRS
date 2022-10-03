<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Upload List') }}
        </h2>    
    </x-slot>

<div class="container pt-4 pl-4 pr-0 ml-5 mr-0 ">
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 dark:text-gray-400"> 
            <tr>
                <th scope="col" class="py-3 px-6">
                    Title
                </th>
                <th scope="col" class="py-3 px-6">
                    Description
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Language
                </th>
                <th scope="col" class="py-3 px-6">
                    Access Rights 
                </th>
                <th scope="col" class="py-3 px-6">
                    Uploaded-Date
                </th>
                <th scope="col" class="py-3 px-6">
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @if($list->count() > 0)
            @foreach($list as $list)
            <tr class="bg-white border-b white:bg-gray-900 gray:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                    {{$list->title}}
                </th>
                <td class="py-4 px-6">
                    {{$list->description}}
                </td>
                <td class="py-4 px-6">
                    @if ($list->topic_id == 1 )
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
                    {{$list->language}}
                </td>
                <td class="py-4 px-6">
                   @if ($list->access_id == 1 )
                   Public
                   @elseif ($list->access_id == 2 )
                   Private
                   @elseif ($list->access_id == 3 )
                   Grouped
                   @else
                   No Group
                   @endif
                </td>
                <td class="py-4 px-6">
                    {{$list->published_at}}
                    {{-- ->format('D/M/Y') --}}
                </td>
                <td class="py-4 px-6">
                    <a href="/upload/uploadshow/{id}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>

            @endforeach
            @else

            <p>No Uploads Yet</p>

            @endif




            {{-- <tr class="bg-gray-50 border-b white:bg-gray-800 gray:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                    Microsoft Surface Pro
                </th>
                <td class="py-4 px-6">
                    White
                </td>
                <td class="py-4 px-6">
                    Laptop PC
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr> --}}
            {{-- <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="py-4 px-6">
                    Black
                </td>
                <td class="py-4 px-6">
                    Accessories
                </td>
                <td class="py-4 px-6">
                    $99
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr> --}}
            {{-- <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Google Pixel Phone
                </th>
                <td class="py-4 px-6">
                    Gray
                </td>
                <td class="py-4 px-6">
                    Phone
                </td>
                <td class="py-4 px-6">
                    $799
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple Watch 5
                </th>
                <td class="py-4 px-6">
                    Red
                </td>
                <td class="py-4 px-6">
                    Wearables
                </td>
                <td class="py-4 px-6">
                    $999
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr> --}}
        </tbody>
    </table>
</div>
</div>

</x-app-layout>
  