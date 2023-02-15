<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Models\Group;
use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;

class GroupController extends Controller
{
    //CREATE GROUP
    public function create(Request $request, $id){
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

    // SHOW GROUP SELECTED AND EDIT
    public function show_one($id){

        $user = Auth::id();

        $one = Group::where('_id', $id && 'group_members', $user)->first();

        if(!$one){
            return redirect('')->with('There is no Such Group');
        } else {
            return view ('/')->with('one', $one);
        }
    }


    // EDIT SELECTED GROUP
    public function edit(Request $request, $id){
        $one = Group::where('_id', $id)->first();

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

    public function leave($id){
        $user = Auth::id();

        $group = Group::where('_id', $id)->first();
        $member = $group->group_members;

        if(!$group){
            return redirect("/page")->with('No Such Group exists');
        }

        $found = false;

        for ($i = 0; $i < count($member); $i++){
            if ($member[$i] == $user){
                unset($member[$i]);
                $found = true;
                break;
            }
        }

            if($found){
                // Update the group in the database with the updated array of group members
            $group->group_members = $member;
            $group->update();

            return redirect ("/page")->with('User successfully removed from group');
            }
             else {
            return redirect ("/page")->with('User id not found in group members');
        }



    }
}
