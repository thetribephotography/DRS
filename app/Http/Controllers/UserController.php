<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;


class UserController extends Controller
{
    public function upload(){
        return view ('user.upload');
    }

    public function published(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.publish');
    }

    public function softwares(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.software');
    }

    public function datasets(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.dataset');
    }

    public function workflows(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.workflow');
    }
}


