<x-admin-layout :title="$title">
    <!-- //MAINNNNNNNNNN -->
    <section>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                <!-- Card Item Start -->
                <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default">
                    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2">
                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                                fill="" />
                            <path
                                d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <h4 class="text-title-md font-bold text-black">
                                {{ count($users) }}
                            </h4>
                            <span class="text-sm font-medium">Active Users</span>
                        </div>

                        <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                            0.43%
                            <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                    fill="" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!-- Card Item End -->

                <!-- Card Item Start -->
                <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default">
                    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2">
                        <!-- <svg class="fill-primary dark:fill-white" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.0937 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z" fill=""/>
                  <path
d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.56245 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.73745 19.8687 5.22183 19.8687Z" fill=""/>
                  <path
d="M19.0062 0.618744H17.15C16.325 0.618744 15.6031 1.23749 15.5 2.06249L14.95 6.01562H1.37185C1.0281 6.01562 0.684353 6.18749 0.443728 6.46249C0.237478 6.73749 0.134353 7.11562 0.237478 7.45937C0.237478 7.49374 0.237478 7.49374 0.237478 7.52812L2.36873 13.9562C2.50623 14.4375 2.9531 14.7812 3.46873 14.7812H12.9562C14.2281 14.7812 15.3281 13.8187 15.5 12.5469L16.9437 2.26874C16.9437 2.19999 17.0125 2.16562 17.0812 2.16562H18.9375C19.35 2.16562 19.7281 1.82187 19.7281 1.37499C19.7281 0.928119 19.4187 0.618744 19.0062 0.618744ZM14.0219 12.3062C13.9531 12.8219 13.5062 13.2 12.9906 13.2H3.7781L1.92185 7.56249H14.7094L14.0219 12.3062Z" fill=""/>
                </svg> -->
                        <svg class="fill-primary dark:fill-white" aria-hidden="true" fill="none"
                            stroke="currentColor" width="20" height="22" viewBox="0 0 20 20" stroke-width="1.5"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z">
                            </path>
                        </svg>
                    </div>

                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <h4 class="text-title-md font-bold text-black">
                                {{ count($uploads) }}
                            </h4>
                            <span class="text-sm font-medium">Total Uploads</span>
                        </div>

                        {{-- <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                            4.35%
                            <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                    fill="" />
                            </svg>
                        </span> --}}
                    </div>
                </div>
                <!-- Card Item End -->

                <!-- Card Item Start -->
                <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default">
                    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2">
                        <!-- <svg class="fill-primary dark:fill-white" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
d="M21.1063 18.0469L19.3875 3.23126C19.2157 1.71876 17.9438 0.584381 16.3969 0.584381H5.56878C4.05628 0.584381 2.78441 1.71876 2.57816 3.23126L0.859406 18.0469C0.756281 18.9063 1.03128 19.7313 1.61566 20.3844C2.20003 21.0375 2.99066 21.3813 3.85003 21.3813H18.1157C18.975 21.3813 19.8 21.0031 20.35 20.3844C20.9 19.7656 21.2094 18.9063 21.1063 18.0469ZM19.2157 19.3531C18.9407 19.6625 18.5625 19.8344 18.15 19.8344H3.85003C3.43753 19.8344 3.05941 19.6625 2.78441 19.3531C2.50941 19.0438 2.37191 18.6313 2.44066 18.2188L4.12503 3.43751C4.19378 2.71563 4.81253 2.16563 5.56878 2.16563H16.4313C17.1532 2.16563 17.7719 2.71563 17.875 3.43751L19.5938 18.2531C19.6282 18.6656 19.4907 19.0438 19.2157 19.3531Z" fill=""/>
                  <path
d="M14.3345 5.29375C13.922 5.39688 13.647 5.80938 13.7501 6.22188C13.7845 6.42813 13.8189 6.63438 13.8189 6.80625C13.8189 8.35313 12.547 9.625 11.0001 9.625C9.45327 9.625 8.1814 8.35313 8.1814 6.80625C8.1814 6.6 8.21577 6.42813 8.25015 6.22188C8.35327 5.80938 8.07827 5.39688 7.66577 5.29375C7.25327 5.19063 6.84077 5.46563 6.73765 5.87813C6.6689 6.1875 6.63452 6.49688 6.63452 6.80625C6.63452 9.2125 8.5939 11.1719 11.0001 11.1719C13.4064 11.1719 15.3658 9.2125 15.3658 6.80625C15.3658 6.49688 15.3314 6.1875 15.2626 5.87813C15.1595 5.46563 14.747 5.225 14.3345 5.29375Z" fill=""/>
                </svg> -->
                        <svg class="fill-primary" aria-hidden="true" fill="none" stroke="currentColor"
                            stroke-width="1.5" width="22" height="22" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                            </path>
                        </svg>
                    </div>

                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <h4 class="text-title-md font-bold text-black">
                                {{ count($categories) }}
                            </h4>
                            <span class="text-sm font-medium">Total Categories</span>
                        </div>

                        <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                            2.59%
                            <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                    fill="" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!-- Card Item End -->

                <!-- Card Item Start -->
                <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default">
                    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2">
                        <!-- <svg class="fill-primary dark:fill-white" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
d="M7.18418 8.03751C9.31543 8.03751 11.0686 6.35313 11.0686 4.25626C11.0686 2.15938 9.31543 0.475006 7.18418 0.475006C5.05293 0.475006 3.2998 2.15938 3.2998 4.25626C3.2998 6.35313 5.05293 8.03751 7.18418 8.03751ZM7.18418 2.05626C8.45605 2.05626 9.52168 3.05313 9.52168 4.29063C9.52168 5.52813 8.49043 6.52501 7.18418 6.52501C5.87793 6.52501 4.84668 5.52813 4.84668 4.29063C4.84668 3.05313 5.9123 2.05626 7.18418 2.05626Z" fill=""/>
                  <path
d="M15.8124 9.6875C17.6687 9.6875 19.1468 8.24375 19.1468 6.42188C19.1468 4.6 17.6343 3.15625 15.8124 3.15625C13.9905 3.15625 12.478 4.6 12.478 6.42188C12.478 8.24375 13.9905 9.6875 15.8124 9.6875ZM15.8124 4.7375C16.8093 4.7375 17.5999 5.49375 17.5999 6.45625C17.5999 7.41875 16.8093 8.175 15.8124 8.175C14.8155 8.175 14.0249 7.41875 14.0249 6.45625C14.0249 5.49375 14.8155 4.7375 15.8124 4.7375Z" fill=""/>
                  <path
d="M15.9843 10.0313H15.6749C14.6437 10.0313 13.6468 10.3406 12.7874 10.8563C11.8593 9.61876 10.3812 8.79376 8.73115 8.79376H5.67178C2.85303 8.82814 0.618652 11.0625 0.618652 13.8469V16.3219C0.618652 16.975 1.13428 17.4906 1.7874 17.4906H20.2468C20.8999 17.4906 21.4499 16.9406 21.4499 16.2875V15.4625C21.4155 12.4719 18.9749 10.0313 15.9843 10.0313ZM2.16553 15.9438V13.8469C2.16553 11.9219 3.74678 10.3406 5.67178 10.3406H8.73115C10.6562 10.3406 12.2374 11.9219 12.2374 13.8469V15.9438H2.16553V15.9438ZM19.8687 15.9438H13.7499V13.8469C13.7499 13.2969 13.6468 12.7469 13.4749 12.2313C14.0937 11.7844 14.8499 11.5781 15.6405 11.5781H15.9499C18.0812 11.5781 19.8343 13.3313 19.8343 15.4625V15.9438H19.8687Z" fill=""/>
                </svg> -->
                        <svg class="fill-primary dark:fill-white" aria-hidden="true" fill="none"
                            stroke="currentColor" stroke-width="1.5" width="22" height="18"
                            viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path>
                        </svg>
                    </div>

                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <h4 class="text-title-md font-bold text-black">
                                {{ count($tags) }}
                            </h4>
                            <span class="text-sm font-medium">Total Tags</span>
                        </div>

                        <span class="flex items-center gap-1 text-sm font-medium text-meta-5">
                            0.95%
                            <svg class="fill-meta-5" width="10" height="11" viewBox="0 0 10 11"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.64284 7.69237L9.09102 4.33987L10 5.22362L5 10.0849L-8.98488e-07 5.22362L0.908973 4.33987L4.35716 7.69237L4.35716 0.0848701L5.64284 0.0848704L5.64284 7.69237Z"
                                    fill="" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!-- Card Item End -->
            </div>

            <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
                <!-- ====== Chart One Start -->
                <!-- <include src="./partials/chart-01.html"/> -->
                <!-- <livewire:admin-dashboard> -->
                <!-- //CHART 1 -->
                <!-- <div class="col-span-12 rounded-sm border border-stroke bg-white px-5 pt-7.5 pb-5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-12">
  <div class="flex flex-wrap items-start justify-between gap-3 sm:flex-nowrap">
    <div class="flex w-full flex-wrap gap-3 sm:gap-5">
      <div class="flex min-w-47.5">
        <span class="mt-1 mr-2 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-primary">
          <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-primary"></span>
        </span>
        <div class="w-full">
          <p class="font-semibold text-primary">Total Revenue</p>
          <p class="text-sm font-medium">12.04.2022 - 12.05.2022</p>
        </div>
      </div>
      <div class="flex min-w-47.5">
        <span
class="mt-1 mr-2 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-secondary">
          <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-secondary"></span>
        </span>
        <div class="w-full">
          <p class="font-semibold text-secondary">Total Sales</p>
          <p class="text-sm font-medium">12.04.2022 - 12.05.2022</p>
        </div>
      </div>
    </div>
    <div class="flex w-full max-w-45 justify-end">
      <div class="inline-flex items-center rounded-md bg-whiter p-1.5 dark:bg-meta-4">
        <button
class="rounded bg-white py-1 px-3 text-xs font-medium text-black shadow-card hover:bg-white hover:shadow-card dark:bg-boxdark dark:text-white dark:hover:bg-boxdark">
          Daysss
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
    <div class="-ml-5" id="chartOne"></div>
  </div>
</div> -->
                <!-- ====== Chart One End -->

                <!-- ====== Chart Two Start -->
                <!-- <include src="./partials/chart-02.html"/> -->
                <!-- ====== Chart Two End -->

                <!-- ====== Chart Three Start -->
                <!-- <include src="./partials/chart-03.html"/> -->
                <!-- ====== Chart Three End -->

                <!-- ====== Map One Start -->
                <!-- <include src="./partials/map-01.html"/> -->
                <!-- ====== Map One End -->

                <!-- ====== Table One Start -->
                <!-- <div class="col-span-12 xl:col-span-8">
        <div
class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
  <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
    Top Channels
  </h4>

  <div class="flex flex-col">
    <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-5">
      <div class="p-2.5 xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Source</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Visitors</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Revenues</h5>
      </div>
      <div class="hidden p-2.5 text-center sm:block xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Sales</h5>
      </div>
      <div class="hidden p-2.5 text-center sm:block xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Conversion</h5>
      </div>
    </div>

    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="./images/brand/brand-01.svg" alt="Brand"/>
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Google
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">3.5K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$5,768</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">590</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-meta-5">4.8%</p>
      </div>
    </div>

    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="./images/brand/brand-02.svg" alt="Brand"/>
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">Twitter</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">2.2K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$4,635</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">467</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-meta-5">4.3%</p>
      </div>
    </div>

    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="./images/brand/brand-03.svg" alt="Brand"/>
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">Github</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">2.1K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$4,290</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">420</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-meta-5">3.7%</p>
      </div>
    </div>

    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="./images/brand/brand-04.svg" alt="Brand"/>
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">Vimeo</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">1.5K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$3,580</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">389</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-meta-5">2.5%</p>
      </div>
    </div>

    <div class="grid grid-cols-3 sm:grid-cols-5">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="./images/brand/brand-05.svg" alt="Brand"/>
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">Facebook</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">1.2K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$2,740</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">230</p>
      </div>

      <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-meta-5">1.9%</p>
      </div>
    </div>
  </div>
</div>

            </div> -->
                <!-- ====== Table One End -->

                <!-- ====== Chat Card Start -->
                <!-- <div
class="col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
              <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white">
                Chats
              </h4>

              <div>
                <a class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4" href="messages.html">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="./images/user/user-03.png" alt="User"/>
                    <span
class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                  </div>

                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium text-black dark:text-white">
                        Devid Heilo
                      </h5>
                      <p>
                        <span class="text-sm font-medium text-black dark:text-white">Hello, how are you?</span>
                        <span class="text-xs"> . 12 min</span>
                      </p>
                    </div>
                    <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                      <span class="text-sm font-medium text-white">3</span>
                    </div>
                  </div>
                </a>
                <a class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4" href="messages.html">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="./images/user/user-04.png" alt="User"/>
                    <span
class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                  </div>

                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium">Henry Fisher</h5>
                      <p>
                        <span class="text-sm font-medium">I am waiting for you</span>
                        <span class="text-xs"> . 5:54 PM</span>
                      </p>
                    </div>
                  </div>
                </a>
                <a class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4" href="messages.html">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="./images/user/user-05.png" alt="User"/>
                    <span
class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"></span>
                  </div>

                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium">Wilium Smith</h5>
                      <p>
                        <span class="text-sm font-medium">Where are you now?</span>
                        <span class="text-xs"> . 10:12 PM</span>
                      </p>
                    </div>
                  </div>
                </a>
                <a class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4" href="messages.html">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="./images/user/user-01.png" alt="User"/>
                    <span
class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                  </div>

                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium text-black dark:text-white">
                        Henry Deco
                      </h5>
                      <p>
                        <span class="text-sm font-medium text-black dark:text-white">Thank you so much!</span>
                        <span class="text-xs"> . Sun</span>
                      </p>
                    </div>
                    <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                      <span class="text-sm font-medium text-white">2</span>
                    </div>
                  </div>
                </a>
                <a class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4" href="messages.html">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="./images/user/user-02.png" alt="User"/>
                    <span
class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-7"></span>
                  </div>

                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium">Jubin Jack</h5>
                      <p>
                        <span class="text-sm font-medium">I really love that!</span>
                        <span class="text-xs"> . Oct 23</span>
                      </p>
                    </div>
                  </div>
                </a>
                <a class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4" href="messages.html">
                  <div class="relative h-14 w-14 rounded-full">
                    <img src="./images/user/user-05.png" alt="User"/>
                    <span
class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"></span>
                  </div>

                  <div class="flex flex-1 items-center justify-between">
                    <div>
                      <h5 class="font-medium">Wilium Smith</h5>
                      <p>
                        <span class="text-sm font-medium">Where are you now?</span>
                        <span class="text-xs"> . Sep 20</span>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div> -->
                <!-- ====== Chat Card End -->
            </div>
        </div>
    </section>


    </div>
</x-admin-layout>
