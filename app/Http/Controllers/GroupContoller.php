<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupContoller extends Controller
{
        // Commmon Resource RoutesNotifications
// Index - show all group
// show - Show single group
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update group
// destroy - Delete group

    public function show(){

    }

    public function index(){
        return view('group.index');
        // return view('group.index')->with('key', $value);
    }

    public function create(){
        return view('group.create');
    }

    // public function store(Request $request){
    //     return view('group.store',);
    // }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
