<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

// Index - show all group
// show - showw single group
// create
// store
// edit
// update
// destroy

    public function index(){
        return view();
    }
    public function show(){
        return view('user.show');
    }
    public function create(){
        return view();
    }
    public function store(){
        return view();
    }
    public function edit(){
        return view('user.edit');
    }
    public function update(){
        return view();
    }
    public function destroy(){
        return view('user.destroy');
    }


    public function upload(){
        return view ('user.upload');
    }

    public function published(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.publish')->with('find', $find);
    }

    public function softwares(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.software')->with('find', $find);
    }

    public function datasets(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.dataset')->with('find', $find);
    }

    public function workflows(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        return view ('user.workflow')->with('find', $find);
    }

}


