<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function index(){


        $user_id = Auth::id();
        $uploads = Upload::where('user_id',$user_id)->get();
        // $groups = Group::all();

        return view('user.index')->with('uploads', $uploads);
    }

    public function edit(){
        return view('user.edit-profile');
    }

    public function search_result(Request $request){

        $results = Upload::latest()->filter(request(['search',]))->simplepaginate(8);
        return view('user.search_result', compact('results'));
    }
}


