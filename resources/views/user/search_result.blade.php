<x-guest-layout :title="$title">
    <div class="py-12">
        <h3 class="mb-2 text-center text-3xl lg:font-semibold">Search Result</h3>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <livewire:filter-post />

            <livewire:show-post />
        </div>

    </div>
</x-guest-layout>
