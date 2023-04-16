<div>

    <!-- //CHART 1 -->
    <div
        class="col-span-12 rounded-sm border border-stroke bg-white px-5 pt-7.5 pb-5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-12">
        <div class="flex flex-wrap items-start justify-between gap-3 sm:flex-nowrap">
            <div class="flex w-full flex-wrap gap-3 sm:gap-5">
            <div class="flex min-w-47.5">
                <span class="mt-1 mr-2 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-primary">
                <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-primary"></span>
                </span>
                <div class="w-full">
                <p class="font-semibold text-primary">Total Users</p>
                <p class="text-sm font-medium">12.04.2022 - 12.05.2022</p>
                </div>
            </div>
            <div class="flex min-w-47.5">
                <span
                class="mt-1 mr-2 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-secondary">
                <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-secondary"></span>
                </span>
                <div class="w-full">
                <p class="font-semibold text-secondary">Total Downloads</p>
                <p class="text-sm font-medium">12.03-2023 - 11.04.2023</p>
                </div>
            </div>
            </div>
            <div class="flex w-full max-w-45 justify-end">
            <div class="inline-flex items-center rounded-md bg-whiter p-1.5 dark:bg-meta-4">
                <button
                class="rounded bg-white py-1 px-3 text-xs font-medium text-black shadow-card hover:bg-white hover:shadow-card dark:bg-boxdark dark:text-white dark:hover:bg-boxdark">
                Day
                </button>
                <button
                class="rounded py-1 px-3 text-xs font-medium text-black hover:bg-white hover:shadow-card dark:text-white dark:hover:bg-boxdark">
                Week
                </button>
                <button
                class="rounded py-1 px-3 text-xs font-medium text-black hover:bg-white hover:shadow-card dark:text-white dark:hover:bg-boxdark">
                Month
                </button>
            </div>
            </div>
        </div>
        <div>
            <div wire:ignore id="chartOne" x-data x-init="chart01(@json($uploadsByMonth), @json($downloadsByMonth), @json($chartMonths))" class="-ml-5"></div>
        </div>
    </div>


<!-- CHART 2 -->
    <!-- <div
            class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
            <div class="mb-4 justify-between gap-4 sm:flex">
                <div>
                <h4 class="text-xl font-bold text-black dark:text-white">
                    Profit this week
                </h4>
                </div>
                <div>
                <div class="relative z-20 inline-block">
                    <select name="#" id="#"
                    class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none">
                    <option value="">This Week</option>
                    <option value="">Last Week</option>
                    </select>
                    <span class="absolute top-1/2 right-3 z-10 -translate-y-1/2">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                        fill="#637381" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
                        fill="#637381" />
                    </svg>
                    </span>
                </div>
                </div>
            </div>

            <div>
                <div id="chartTwo" class="-ml-5 -mb-9"></div>
            </div>
    </div> -->



<!-- CHART 3 -->
    


<!-- CHART 4 -->


</div>

