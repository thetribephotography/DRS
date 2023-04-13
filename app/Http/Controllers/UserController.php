<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Upload;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function index()
    {

        $user = Auth::user();
        $user_id = Auth::id();
        $uploads = Upload::where('access_id', "1")->get();
        // $notifications = optional($user)->unreadNotifications;
        // $groups = Group::all();
        $title = "Dashboard";

        return view('user.index', compact('uploads', 'title'));
    }

    public function edit()
    {
        $title = "Edit Profile";
        return view('user.edit-profile', compact('title'));
    }

    public function show()
    {
        $title = "User Profile";
        $auth_user_id = Auth::user()->_id;
        $user = User::where('_id', $auth_user_id)->first();

        return view('user.show', compact('title', 'user'));
    }

    public function public_show($id)
    {
        $user = User::with('uploads')->where('_id', $id)->first();
        $title = $user->name . " - Profile";
        return view('user.public_show', compact('title', 'user'));
    }
}
