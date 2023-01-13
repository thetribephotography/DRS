<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publishcation Upload Form') }}
        </h2>    
    </x-slot>

<div class="container px-4 px-4 mb-4 mt-4">
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-0">
        {{-- <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
          <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div> --}}
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form method="POST" action="{{route('uploads.publish')}}" enctype="multipart/form-data">
          @csrf
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                  <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                  <input type="text" name="title" id="title" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
  
                <div class="col-span-6 sm:col-span-4">
                  <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                  <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Brief description for your Project. URLs are hyperlinked."></textarea>
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <label for="date" class="block text-sm font-medium text-gray-700">Publication Date</label>
                    <div class="relative">
                      <div class="flex absolute inset-y-0 right-3 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                      </div>
                      <input name="date" id="date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 dark:text-dark white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="DD/MM/YYYY">
                    </div>
                <p class="mt-2 text-sm text-gray-500">Note: Date of first publication.</p>
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                  <input type="text" name="language" id="language"  class=" js-example-basic-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  <p class="mt-2 text-sm text-gray-500">Primary Language of Upload</p>
                </div>

                <div class="col-span-6">
                  <label for="author" class="block text-sm font-medium text-gray-700">Author(s)</label>
                  <input type="text" name="author" id="author" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                
                       
                      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="keywords" class="block text-sm font-medium text-gray-700">KeyWords</label>
                        <div class="input-group input-group-sm mb-3">
                            <input name="keywords" id="keywords"  multiple="multiple" class="js-example-basic-multiple mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ">

                      </div>
                    </div>
                    

                    <div class="col-span-6 sm:col-span-6">
                      <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">   
                      </div>


                    <div class="col-span-6 sm:col-span-6">
                    <fieldset>
                        <legend class="contents text-base font-medium text-gray-900">Access Rights</legend>
                        <p class="text-sm text-gray-500">Please Choose how Visible your Data will be on the Internet</p>
                        <div class="mt-4 space-y-4">
                          <div class="flex items-center">
                            <input id="push-everything" name="example" value="1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" checked>
                            <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Public</label>
                          </div>
                          <p class="text-sm text-gray-500"> Anyone Can View and Access this</p>

                          <div class="flex items-center">
                            <input id="push-email" name="example" value="2"  type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Private</label>
                          </div>
                          <p class="text-sm text-gray-500"> Only You Can View and Access this</p>
                          <div class="flex items-center">
                            <input id="group" name="example" value="3" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="group" class="ml-3 block text-sm font-medium text-gray-700">Group</label>
                          </div>
                          <p class="text-sm text-gray-500"> Only Your Selected Group members can View and Access this</p>
                          <div id="box" style="display: none">
                            <select name="grouping" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1">Group 1</option>
                            <option value="2">Group 4</option>
                            <option value="3">Group 7</option>
                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>


                    <div class="col-span-6 sm:col-span-6">
                      <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">   
                      </div>


                    <div class="col-span-6 sm:col-span-4">
                      <div class="flex justify-center items-center w-full">
                          <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer white:hover:bg-bray-800 white:bg-gray-700 hover:bg-gray-100 white:border-gray-600 white:hover:border-gray-500 white:hover:bg-gray-600">
                              <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                  <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload Publication</span> or drag and drop</p>
                              </div>
                              <input id="dropzone-file"  name="summary-upload" type="file" class="hidden" />
                          </label>
                      </div> 
                  </div>

                  <label for="" class="input_form">Farm Produce</label>
                                <div class="input-group input-group-sm mb-3">
                                      <select class="js-example-basic-multiple form-control border-0 border-bottom" required name="farm_produce" multiple="multiple" id="farmProduce" value="">
                                      </select>
                                </div>

                  <input type="hidden" id="topic_id" name="topic_id" value="1">


                    </div>
                    

                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                      </div>

                    </div>
                
                

              </div>
            </div>
           
        </form>
      </div>
    </div>
  </div>

  <script>
       $('.js-example-basic-multiple').select2({
        placeholder: "Select multiple items",
        allowClear: true
    });
  </script>
 
 
 
 
 
 {{-- MIGHT STILL USE THESE --}}
 
  {{-- <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
          <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="#" method="POST">
          <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company-website" class="block text-sm font-medium text-gray-700">Website</label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span>
                    <input type="text" name="company-website" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com">
                  </div>
                </div>
              </div>
  
              <div>
                <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                <div class="mt-1">
                  <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
              </div>
  
              <div>
                <label class="block text-sm font-medium text-gray-700">Photo</label>
                <div class="mt-1 flex items-center">
                  <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>
                  <button type="button" class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Change</button>
                </div>
              </div>
  
              <div>
                <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
          <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
        </div>
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="#" method="POST">
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
              <fieldset>
                <legend class="sr-only">By Email</legend>
                <div class="text-base font-medium text-gray-900" aria-hidden="true">By Email</div>
                <div class="mt-4 space-y-4">
                  <div class="flex items-start">
                    <div class="flex h-5 items-center">
                      <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">Comments</label>
                      <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex h-5 items-center">
                      <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                      <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex h-5 items-center">
                      <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="offers" class="font-medium text-gray-700">Offers</label>
                      <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend class="contents text-base font-medium text-gray-900">Push Notifications</legend>
                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                <div class="mt-4 space-y-4">
                  <div class="flex items-center">
                    <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                  </div>
                  <div class="flex items-center">
                    <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Same as email</label>
                  </div>
                  <div class="flex items-center">
                    <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">No push notifications</label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>   --}}

</x-app-layout>
    