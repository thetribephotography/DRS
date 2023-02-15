<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Models\Group;
use App\Models\Upload;
use App\Models\User;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;


class AdminController extends Controller
{

    public function index(){
        return view('admin.index');
    }
    // VIEW ALL UPLOADS IN A LIST
    public function viewallpost(){
        $this->authorize('view_all_post', 'You are not Authorized for this Action');

        $see = Upload::all();

        return view ('')->with('see', $see);
    }

    // VIEW 1 UPLOAD
    public function view_one_all($id){
        $this->authorize('view_all_post', 'You are not Authorized for this Action');

        $find = Upload::find($id);

        return view ('')->with('find', $find);
    }

    // UPDATE ANY UPLOAD BY ID
    public function updateall(Request $request, $id){
        $this->authorize('update_all_post', 'You are not Authorized for this Action');

        if($request->all() == ''){
            return redirect ("/page")->with("No Updates were Made");
        } else{

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

            return redirect ("/page")->with("Update Successful");

        }
    }

    // DELETE ANY UPLOAD
    public function deleteall($id){
        $this->authorize('delete_all_post', 'You do not have the Authorization for this Action');

        $delete = Upload::where('_id', $id)->delete();

        return redirect ("/page")->with('Successfully Deleted');
    }

    // view all groups in a list
    public function viewallgroups(){
        $this->authorize('view_all_group', 'You do not have the Authorization for this Action');

        $see = Group::all();

        return view ("")->with('see', $see);
    }

    // VIEW 1 GROUP
    public function viewonegroup($id){
        $this->authorize('view_all_group', 'You do not have the Authorization for this Action');

        $view = Group::find($id);

        return view("")->with('view', $view);
    }


    //DELETE ANY GROUP
    public function deletegroup($id){
        $this->authorize('edit_all_group', 'You do not have the Authorization for this Action');

        $delete = Group::where('_id', $id)->delete();

        return view("")->with("Successfully Deleted");

    }

        //REMOVE ANY USER FROM ANY GROUP
        public function remove($id, $user){
            $this->authorize('edit_all_group', 'You do not have the Authorization for this Action');

            $group = Group::where('_id', $id)->first();
            $members = $group->group_members;

            $key = array_search($user, $members);

            if(!in_array($user && $members)){
                return view ("")->with("User not Found in Group");
            } else {
                unset($members[$user]);
                $group->group_members->$members;
                $group->update();

                return view ("")->with("Successfully Deleted");
            }

        }

        //SEE ALL USERS
        public function seeuser(){
            $this->authorize('create_user', 'You do not have the Authorization for this Action');

            $list = User::all();

            return view("")->with('list', $list);
        }

        //SHOW 1 USER
        public function userone($id){
            $this->authorize('create_user', 'You do not have the Authorization for this Action');

            $show = User::where('_id', $id)->first();
            $groups = Group::where('group_members', $id)->get();

            return view ("", compact ('show', 'groups'));
        }

        // //UPDATE USER
        // public function userupdate($id){

        // }


       //DELETE ANY USER
       public function userdelete($id){
        $this->authorize('delete_user', 'You do not have the Authorization for this Action');

        $delete = User::where('_id', $id)->delete();

        return redirect("/page")->with("Successfully deleted");

       }

}
