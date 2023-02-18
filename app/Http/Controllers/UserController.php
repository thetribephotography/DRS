<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function upload(){
        return view ('user.upload');
    }

    public function published(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('upload.publish')->with('find', $find);
    }

    public function softwares(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('upload.software')->with('find', $find);
    }

    public function datasets(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('upload.dataset')->with('find', $find);
    }

    public function workflows(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('upload.workflow')->with('find', $find);
    }

    public function create_group(){

        return view ('group.create');
    }

    public function edit(){
        return view('user.edit-profile');
    }

     public function search_result(Request $request){

        $results = Upload::latest()->filter(request(['search',]))->simplepaginate(8);
        return view('user.search_result', compact('results'));
    }
}


