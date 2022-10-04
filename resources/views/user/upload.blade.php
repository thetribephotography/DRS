<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>    
    </x-slot>


<div class="container px-4 px-4 mb-4 mt-4 ml-14 mr-2">
  <div class="w-full bg-white rounded-lg border shadow-md white:bg-gray-800 grey:border-gray-700 pt-4 pb-4 pl-4 pr-4">
    <div class="layout">
      <div class="upload">
      <a href="{{ route('user.publish') }}" id="publish"> 
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
        {{-- <p>PUBLISH</p> --}}
      </a>
      </div>
      <div class="upload">
        <a href="{{ route('user.software') }}" id="software"> 
        <label for="software"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg></label>
        {{-- <p>SOFTWARE</p> --}}
      </a>
      </div>
      <div class="upload">
        <a href="{{ route('user.dataset') }}" id="dataset"> 
          <label for="dataset"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg></label>
          {{-- <P>DATASET</P> --}}
        </a>

      </div>

      <div class="upload">
        <a href="{{ route('user.workflow') }}" id="workflow"> 
          <label for="workflow"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></label>
          {{-- <p>WORKFLOW</p> --}}
        </a>

      </div>
    </div>

  </div>
</div>

</x-app-layout>
    