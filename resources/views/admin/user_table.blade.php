<x-admin-layout :title="$title">
    <div class="max-w-screen-2xl mx-auto p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
                <h2 class="font-semibold text-title-md2 text-black dark:text-white">Table</h2>

                <nav>
                <ol class="flex items-center gap-2">
                    <li><a href="index.html">Dashboard /</a></li>
                    <li class="text-primary">Table</li>
                </ol>
                </nav>
            </div>


        <div class="flex flex-col gap-10">

        <livewire:user-table>

        </div>

    </div>

</x-admin-layout>