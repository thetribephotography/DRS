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
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;

class GroupController extends Controller
{
    //RENDER HTML FILE FUNCTIONS
    public function create_group()
    {
        $title = "Create New Group";
        $users = User::role('registered')->get();
        return view('group.create', compact('users', 'title'));
    }

    //CREATE GROUP
    public function create(Request $request)
    {
        // $this->authorize('create_group', 'You do not have the Permission to Access this Page');

        $validate = $request->validate([
            'name' => 'required',
            'members' => 'required',
        ]);

        $user = Auth::id();
        // $slug_name = $request->name;

        $update = new Group;
        $update->name = $request->name;
        $update->group_members = $request->members;
        $update->group_desc = $request->group_desc;
        $update->slug = Str::slug($update->name);
        $update->user_id = $user;

        $update->save();

        return redirect('/dashboard')->with('Group Created Successfully');
    }

    // SHOW ALL GROUPS FOR PARTICULAR USER
    public function show()
    {
        // $this->authorize('view_group', 'You dont have the permission to access this');

        $user = Auth::id();

        $list = "Hey";
        // $list = Group::with('user', 'uploads')->where('group_members', $user)->orwhere('user_id', $user)->get();
        $title = "Groups | All";

        // dd($list);
        if (!$list) {
            return redirect('/dashboard')->with('You are not in any groups right now.Kindly create yours and add your friends or ask to be added');
        } else {
            return view('group.show_all', compact('list', 'title'));
        }
    }

    // SHOW GROUP SELECTED AND EDIT
    public function show_one($id)
    {

        $user = Auth::id();


        // $one = Group::with('uploads')
        $one = Group::with('uploads')->where('_id', $id)->first();

        // $uploads = Upload::whereat('_id', $one->upload)->get();

        dd($one);
        if (!$one) {
            return redirect('/dashboard')->with('There is no Such Group');
        } else {
            return view('', compact('one'));
        }
    }


    // EDIT SELECTED GROUP
    public function edit(Request $request, $id)
    {
        $one = Group::where('_id', $id)->first();

        if ($request->all() == '') {
            return redirect('/dashboard')->with('No Updates Made');
        } else {

            $one->name = $request->name;

            $members = $request->members;

            $users_id = [];

            foreach ($members as $members) {
                $users = User::where('email', $members)->get();
                $users_id[] = $users->_id;
            }

            $one->group_members = $request->$users_id;

            $one->update();

            return view('/dashboard')->with('Update Successful');
        }
    }

    public function leave($id)
    {
        $user = Auth::id();

        $group = Group::where('_id', $id)->first();
        $member = $group->group_members;

        if (!$group) {
            return redirect("/dashboard")->with('No Such Group exists');
        }

        $found = false;

        for ($i = 0; $i < count($member); $i++) {
            if ($member[$i] == $user) {
                unset($member[$i]);
                $found = true;
                break;
            }
        }

        if ($found) {
            // Update the group in the database with the updated array of group members
            $group->group_members = $member;
            $group->update();

            return redirect("/dashboard")->with('User successfully removed from group');
        } else {
            return redirect("/dashboard")->with('User id not found in group members');
        }
    }


    //VIEW PoSTS IN A GROUP
    public function shade(Request $request, $id)
    {
        $user = Auth::id();

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($user == $validated->email) {
            return view("/dashboard")->with("Proceed");
        } else {
            return redirect("/dashboard")->with("wahala");
        }
    }
}
