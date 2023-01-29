<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\User;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Traits\Uploader;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\Model;


class AdminController extends Controller
{
    public function viewallpost(){
        $this->authorize('view_all_post', 'You are not Authorized for this Action');

        $see = Uploads::all();

        return view ('')->with('see', $see);
    }

    public function view_one_all($id){
        $this->authorize('view_all_post', 'You are not Authorized for this Action');

        $find = Uploads::find($id);

        return view ('')->with('find', $find);
    }

    public function updateall($id){
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

    public function deleteall($id){
        $this->authorize('delete_all_post', 'You do not have the Authorization for this Action');

        $delete = Upload::where('_id', $id)->delete();

        return redirect ("/page")->with('Successfully Deleted');
    }


    public function viewallgroups(){
        $this->authorize('view_all_group', 'You do not have the Authorization for this Action');

        $see = Group::all();

        return view ("")->with('see', $see);
    }


    public function viewonegroup($id){
        $this->authorize('view_all_group', 'You do not have the Authorization for this Action');

        $view = Group::find($id);

        return view("")->with('view', $view);
    }


}
