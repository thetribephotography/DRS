<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div>
    <h1>You're logged in!</h1>
    <br>

 <h1 class="font-bold mt-0 mb-6">Actions</h1>
    <div class="mb-6">
        <h3 class="text-3xl font-bold mb-8"> User</h3>
        <a href="{{route('user-view-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Profile</a>
        <a href="{{route('user-edit-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit profile</a>
        <a href="{{route('user-delete-account')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Delete Account</a>
    </div>
    <div class="mb-6">
        <h3 class="text-3xl font-bold mb-8">Upload</h3>
        <a href="{{route('user.upload') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Upload</a>
    </div>
    <div class="mb-6">
        <h3 class="text-3xl font-bold mb-8">Group</h3>
        <a href="{{route('group.create-group')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Create Group</a>
        <a href="{{route('group.view-group')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View all groups</a>
    </div>
</div>

</x-app-layout>
