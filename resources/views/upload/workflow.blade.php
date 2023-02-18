<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Workflow Upload Form') }}
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
        <form action="{{ route('uploads.publish') }}" method="POST" enctype="multipart/form-data">
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
                        <p class="text-sm text-gray-500">Please Choose how Visible your Data will be on Our Platform</p>
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
                            <input id="group" name="example" value="2" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
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
      

                        <div class="mt-10 col-span-6 sm:col-span-4">
                        {{-- <div class="flex text-sm text-gray-600"> --}}
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="large_size">Upload Workflow File</label>
                        <input class="block w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400" id="file-upload" name="file-upload" type="file">
                        <p class="pt-3 mb-2 text-sm text-gray-500 dark:text-gray-400">It is Advisable you zip the folder before Uploading for Better Consumption</p>
                        {{-- </div> --}}
                        </div>




                            <div class="col-span-6 sm:col-span-4">
                            <div class="flex justify-center items-center w-full">
                                <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer white:hover:bg-bray-800 white:bg-gray-700 hover:bg-gray-100 white:border-gray-600 white:hover:border-gray-500 white:hover:bg-gray-600">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click the Icon to Upload a Video or Picture explaining your Publication</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file"  name="summary-upload" type="file" class="hidden" />
                                </label>
                            </div> 
                        </div>

                      <input type="hidden" id="topic_id" name="topic_id" value="4">



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
  
  
  
  
  </x-app-layout>
    