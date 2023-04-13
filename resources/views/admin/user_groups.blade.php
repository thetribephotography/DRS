<x-admin-layout :title="$title">
    <div class="max-w-screen-2xl mx-auto p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
                <h2 class="font-semibold text-title-md2 text-black dark:text-white">Groups</h2>

                <nav>
                <ol class="flex items-center gap-2">
                    <li><a href="{{route ('admin.index') }}">Dashboard /</a></li>
                    <li class="text-primary">User Groups</li>
                </ol>
                </nav>
            </div>


        <div class="flex flex-col gap-10">
            
      <livewire:group-table>

        </div>

    </div>

</x-admin-layout>