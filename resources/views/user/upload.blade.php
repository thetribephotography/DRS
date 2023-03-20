<x-app-layout>
    <div class="h-[10rem] w-full bg-gray-100 pt-8 shadow">
        <div class="ml-[6rem]">
            <h2 class="mb-4 text-s3 font-semibold text-clblack">Upload type</h2>
            <p>Select the type of upload you wish to upload</p>
        </div>
    </div>

    <div class="flex h-60 gap-6 pt-14 pl-[25rem]">
        {{-- Article --}}
        <a class="text-cgray hover:text-cmblue" href="{{ route('user.publish') }}">
            <div class="w-40 rounded border border-gray-400 p-4 text-center hover:bg-[#DBF1FA]">
                <svg class="mb-4 h-12 w-12 translate-x-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="text-s7 font-semibold uppercase">Article</span>
            </div>
        </a>
        {{-- Dataset --}}
        <a class="text-cgray hover:text-cmblue" href="{{ route('user.dataset') }}">
            <div class="w-40 rounded border border-gray-400 p-4 text-center hover:bg-[#DBF1FA]">
                <svg class="mb-4 h-12 w-12 translate-x-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                </svg>
                <span class="text-s7 font-semibold uppercase">Dataset</span>
            </div>
        </a>
        {{-- Software --}}
        <a class="href= text-cgray hover:text-cmblue"{{ route('user.software') }}">
            <div class="w-40 rounded border border-gray-400 p-4 text-center hover:bg-[#DBF1FA]">
                <svg class="mb-4 h-12 w-12 translate-x-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                </svg>
                <span class="text-s7 font-semibold uppercase">Software</span>
            </div>
        </a>
        {{-- Worflow --}}
        <a class="href= text-cgray hover:text-cmblue"{{ route('user.workflow') }}">
            <div class="w-40 rounded border border-gray-400 p-4 text-center hover:bg-[#DBF1FA]">
                <svg class="mb-4 h-12 w-12 translate-x-9" viewBox="0 0 55 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M50 35V27.5C50 24.725 47.775 22.5 45 22.5H30V15H35V0H20V15H25V22.5H10C7.225 22.5 5 24.725 5 27.5V35H0V50H15V35H10V27.5H25V35H20V50H35V35H30V27.5H45V35H40V50H55V35H50ZM25 5H30V10H25V5ZM10 45H5V40H10V45ZM30 45H25V40H30V45ZM50 45H45V40H50V45Z"
                        fill="#7A7A7A" />
                </svg>
                <span class="text-s7 font-semibold uppercase">Worflow</span>
            </div>
        </a>

    </div>
</x-app-layout>
