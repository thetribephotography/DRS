<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Upload;
use App\Models\User;
use App\Models\Group;

class GroupController extends Controller
{
    //CREATE GROUP
    public function newgroup(Request $request, $id){
        $this->authorize('create_group', 'You do not have the Permission to Access this Page');

        $validate = $request->validate([
            'name' => 'required',
            'members' => 'required',
        ]);

        $members = $request->members;

        $users_id = [];

        foreach($members as $members){
            $users = User::where('email', $members)->get();

                $users_id[] = $users->_id;
        }

            $update = new Group;
            $update->name = $request->name;
            $update->group_members = $users_id;
        
    }

    // SHOW ALL GROUPS FOR PARTICULAR USER
    public function show(){
        $this->authorize('view_group', 'Yu dont have the permission to access this');

        $user = Auth::id();

        $list = Group::where('group_members', $user)->get();

        return view ('')->with('list', $list);

    }

    //SHOW ALL GROUPS FOR ADMIN 
    public function showAll(){
        $this->authorize('view_all_group', 'Yu dont have the permission to access this');

        $list_all = Group::all();

        return view ('')->with('list_all', $list_all);
    }

    // SHOW GROUP SELECTED AND EDIT
    public function show_one(Request $request, $id){

        $one = Group::where('_id', $id)->get();

        if(!$one){
            return redirect('')->with('There is no Such Upload');
        }

        return view ('/')->with('one', $one);
    }


    // EDIT SELECTED GROUP
    public function edit(){
         if($request->all() == ''){
            return redirect ('/page')->with('No Updates Made');

        } else {

            $one->name = $request->name;

            $members = $request->members;

            $users_id = [];

            foreach($members as $members){
                $users = User::where('email', $members)->get();
                $users_id[] = $users->_id;
            }

               $one->group_members = $request->$users_id;

               $one->update();

            return view ('/page')->with('Update Successful');

        }
    }
}
