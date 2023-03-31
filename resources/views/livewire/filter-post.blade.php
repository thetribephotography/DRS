<div class="flex flex-col lg:flex-row">

    <div class="relative m-4 rounded-lg border-2 border-gray-100 lg:w-[30rem]">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search z-20 text-gray-400 hover:text-gray-500"></i>
        </div>
        <input class="z-0 h-14 w-full rounded-lg pl-10 pr-20 focus:shadow focus:outline-none" id="" name="search"
            type="text" wire:model="query" placeholder="" wire:keyup.debounce="filter">
        <div class="absolute top-2 right-2">
            <button class="h-10 w-20 rounded-lg bg-blue-500 text-white hover:bg-blue-600" type="submit"
                wire:click="filter">
                Search
            </button>
        </div>

    </div>
    <div>
        <select
            class="mt-6 block w-[15rem] rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
            id="upload_type" name="" wire:model="topic_id" wire:change="filter">
            <option selected>Choose an Upload type</option>
            <option value="1">Article</option>
            <option value="2">Software</option>
            <option value="3">Dataset</option>
            <option value="4">Workflow</option>
        </select>
    </div>


</div>
