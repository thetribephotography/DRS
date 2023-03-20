<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function index()
    {

        $user = Auth::user();
        $user_id = Auth::id();
        $uploads = Upload::where('user_id', $user_id)->get();
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

    public function search_result(Request $request)
    {

        $title = "Search Results";
        $results = Upload::latest()->filter(request(['search',]))->simplepaginate(8);
        return view('user.search_result', compact('results', 'title'));
    }
}
