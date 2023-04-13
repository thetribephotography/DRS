<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\User;
use App\Models\Group;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Traits\Uploader;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\Model;


class AdminController extends Controller
{

    public function index()
    {
        $title  = "Admin|Dashboard";
        return view('admin.index', compact('title'));
    }

    //USER TABLE
    public function usertable(){
        $title  = "Admin|Dashboard";
        return view ('admin.user_table', compact('title'));
    }

    // VIEW ALL UPLOADS IN A LIST
    public function useruploads()
    {
        // $this->authorize('view_all_post', 'You are not Authorized for this Action');
        $title  = "Admin|Dashboard";
        $see = Upload::whereNull('deleted_at')->get();

        return view('admin.user_uploads', compact('see', 'title'));
    }

    // VIEW 1 UPLOAD
    public function view_one_all($id)
    {
        $this->authorize('view_all_post', 'You are not Authorized for this Action');

        $find = Upload::find($id);

        return view('')->with('find', $find);
    }

    // UPDATE ANY UPLOAD BY ID
    public function updateall(Request $request, $id)
    {
        $this->authorize('update_all_post', 'You are not Authorized for this Action');

        if ($request->all() == '') {
            return redirect("/admin-dasboard")->with("No Updates were Made");
        } else {

            $update = Upload::where('_id', $id)->first();

            $update->title = $request->title;
            $update->description = $request->description;
            $update->published_at = $request->date;
            $update->language = $request->language;
            $update->author = $request->author;
            $update->keywords = $request->keywords;
            $update->access_id = $request->example;
            // $update->topic_id = $topic_id;
            $update->path = $path;
            // $update->user_id = $user;

            $update->update();

            return redirect("/admin-dashboard")->with("Update Successful");
        }
    }

    // DELETE ANY UPLOAD
    public function deleteall($id)
    {
        $this->authorize('delete_all_post', 'You do not have the Authorization for this Action');

        $delete = Upload::where('_id', $id)->delete();

        return redirect("/admin-dashboard")->with('Successfully Deleted');
    }

    // view all groups in a list
    public function usergroups()
    {
        // $this->authorize('view_all_group', 'You do not have the Authorization for this Action');
        $title  = "Admin|Dashboard";
        $see = Group::whereNull('deleted_at')->get();

        return view("admin.user_groups", compact('see', 'title'));
    }

    // VIEW 1 GROUP
    public function viewonegroup($id)
    {
        $this->authorize('view_all_group', 'You do not have the Authorization for this Action');

        $view = Group::find($id);

        return view("")->with('view', $view);
    }


    //DELETE ANY GROUP
    public function deletegroup($id)
    {
        $this->authorize('edit_all_group', 'You do not have the Authorization for this Action');

        $delete = Group::where('_id', $id)->delete();

        return view("")->with("Successfully Deleted");
    }

    //REMOVE ANY USER FROM ANY GROUP
    public function remove($id, $user)
    {
        $this->authorize('edit_all_group', 'You do not have the Authorization for this Action');

        $group = Group::where('_id', $id)->first();
        $members = $group->group_members;

        $key = array_search($user, $members);

        if (!in_array($user && $members)) {
            return view("")->with("User not Found in Group");
        } else {
            unset($members[$user]);
            $group->group_members->$members;
            $group->update();

            return view("")->with("Successfully Deleted");
        }
    }

    //Display all users
    public function users()
    {
        $this->authorize('create_user', 'You do not have the Authorization for this Action');

        $title = "Users";
        $users = User::all();
        // $uploads = Upload::all();
        // $tags = Tag::all();
        // $categories = Category::all();

        return view("admin.users", compact('title', 'users', 'tags', 'categories', 'uploads'));
    }

    public function errors()
    {
        $this->authorize('create_user', 'You do not have the Authorization for this Action');

        $title = "Errors and Logs";
        // $users = User::all();

        return view("admin.errors", compact('title'));
    }



    //SHOW 1 USER
    public function userone($id)
    {
        $this->authorize('create_user', 'You do not have the Authorization for this Action');

        $show = User::where('_id', $id)->first();
        $groups = Group::where('group_members', $id)->get();

        return view("", compact('show', 'groups'));
    }

    // //UPDATE USER
    // public function userupdate($id){

    // }


    //DELETE ANY USER
    public function userdelete($id)
    {
        $this->authorize('delete_user', 'You do not have the Authorization for this Action');

        $delete = User::where('_id', $id)->delete();

        return redirect("/admin-dashboard")->with("Successfully deleted");
    }

    //SEE ALL REPORTED COMMENTS
    public function comments()
    {
        $com = Comment::where('status', 2)->get();

        return view('', compact('com'));
    }
}
