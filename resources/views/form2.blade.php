<x-app-layout>
    <x-slot name="header">
        Hello
    </x-slot>
    <div class="w-full max-w-xs">
        <form action="/form3"  method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tag">
                Categories
            </label>
            <select class="js-example-basic-multiple2" name="cars[]" multiple="multiple" id="car">
                <option value="AL">Alabama</option>
                  ...
                <option value="WY">Wyoming</option>
                <option value="WY">Last Last</option>
                <option value="WY">Omo</option>
              </select>




          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tag">
                Tag
            </label>
              <select class="js-example-basic-multiple" name="states[]" multiple="multiple" id="tag">
                <option value="AL">Alabama</option>
                  ...
                <option value="WY">Wyoming</option>
                <option value="WY">Last Last</option>
                <option value="WY">Omo</option>
              </select>
          </div>
          <div class="flex items-center justify-between">
            <input type="submit" value="Submit">
          </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 Acme Corp. All rights reserved.
        </p>
      </div>
      <script>


        $(document).ready(function() {
            $('.js-example-basic-multiple2').select2({
                placeholder: "Select a Category",
            });


            $('.js-example-basic-multiple').select2({
                placeholder: "Select a Tag",
                tags: true
            });
        });
      </script>
</x-app-layout>
