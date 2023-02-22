<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
use App\Models\Group;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comments;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Traits\Uploader;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Http\Request;



class UploadController extends Controller
{
    use Uploader;

    public function upload(){
        return view ('user.upload');
    }

    public function published(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view ('upload.publish', compact('find', 'categories', 'tags'));
    }

    public function softwares(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view ('upload.software', compact('find', 'categories', 'tags'));
    }

    public function datasets(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view ('upload.dataset', compact('find', 'categories', 'tags'));
    }

    public function workflows(){
        $user = Auth::id();
        $find = Group::where('group_member', $user)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view ('upload.workflow', compact('find', 'categories', 'tags'));
    }


    public function uploadlist(){
        
            $this->authorize('view_user_post', 'You do not have the permission to access this.');

            $user = Auth::id();

            $list = Upload::where('user_id', $user)->get();

            // dd($list);

            return view ('user.upload_list', compact('list', 'user'));
    }

    public function uploadshow($id){

        $this->authorize('view_user_post', 'You do not have the permission to access this.');

        $user = Auth::id();
        $upload = Upload::where($id && $user)->first();

        foreach($uploads->_id as $uploadtag_id){
            $tag = Tag::where('_id', $upload->tags_id);

            $tags[] = $tag->_id; 
        }

        $comments = Comment::where('upload_id',$upload->_id)->with('user')->get(); //Gets comments and users that made the commment

        // dd($value);

        return view('user.show_upload', compact('upload', 'comments', 'tags'));
    }

    //UPDATE POST
    public function updatepost(Request $request, $id){

        $this->authorize('update_user_post', 'You dont have the Permission to update these records');

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
    
    // REMEMBER TO UPLOAD MULTIPLE FILES CODE TO ONE PATH(1 for file, 1 FOR VIDEOS/IMAGES)
    public function publish(Request $request){

         $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'language' => 'required',
            'author' => 'required',
            'keywords' => 'required',
            'example' => 'required',
            'topic_id' => 'required',
        ]);
    
        //     request for hidden column, title and access rights and save in variable
        $topic_id = $request->topic_id;
        $file_name = $request->title;
        $access = $request->example;
    
    if ( $topic_id == 1){
            
        $user = Auth::id();

        $path = $this->UploadFile($request->file('summary-upload'), $file_name);

        $upload = new Upload;
        $upload->title = $request->title;
        $upload->description = $request->description;
        $upload->published_at = $request->date;
        $upload->language = $request->language;
        $upload->author = $request->author;
        $upload->keywords = $request->keywords;
        $upload->access_id = $request->example;
        $upload->topic_id = $topic_id;
        $upload->path = $path;
        $upload->user_id = $user;

        $upload->save(); 


    }  else if ($topic_id == 2){
           
        $user = Auth::id();

        $path = $this->UploadFile($request->file('file-upload'), $file_name);
        
       //trying to upload multiple files from different inputs into one column

       // $path2 = $this->UploadFile($request->file('summary-upload1'), 'Software');

        $upload = new Upload;
        $upload->title = $request->title;
        $upload->description = $request->description;
        $upload->published_at = $request->date;
        $upload->language = $request->language;
        $upload->author = $request->author;
        $upload->keywords = $request->keywords;
        $upload->access_id = $request->example;
        $upload->topic_id = $topic_id;
        $upload->path = $path;
        $upload->user_id = $user;

        $upload->save();

    } else if($topic_id == 3){
        // get Authenticated user id 
        $user = Auth::id();

       $path = $this->UploadFile($request->file('file-upload'), $file_name);
        //trying to upload multiple files from different inputs into one column

       // $path2 = $this->UploadFile($request->file('summary-upload1'), 'Software');

        $upload = new Upload;
        $upload->title = $request->title;
        $upload->description = $request->description;
        $upload->published_at = $request->date;
        $upload->language = $request->language;
        $upload->author = $request->author;
        $upload->keywords = $request->keywords;
        $upload->access_id = $request->example;
        $upload->topic_id = $topic_id;
        $upload->path = $path;
        $upload->user_id = $user;

        $upload->save();

    } else if ($topic_id == 4){
        // get Authenticated user id 
        $user = Auth::id();

        $path = $this->UploadFile($request->file('file-upload'), $file_name);
        //trying to upload multiple files from different inputs into one column

       // $path2 = $this->UploadFile($request->file('summary-upload1'), 'Software');

        $upload = new Upload;
        $upload->title = $request->title;
        $upload->description = $request->description;
        $upload->published_at = $request->date;
        $upload->language = $request->language;
        $upload->author = $request->author;
        $upload->keywords = $request->keywords;
        $upload->access_id = $request->example;
        $upload->topic_id = $topic_id;
        $upload->path = $path;
        $upload->user_id = $user;

        $upload->save();

    }

    if ($access == 3){
    
        $update = Group::where('_id', $id)->first();
        $upload_id = $upload->_id;

        $update->upload = $upload_id;
        $update->update();
    }

    return redirect ("/page")->with ("Upload Successful");

}

    public function deletepost($id){
        $this->authorize('delete_user_post', 'You do not have the permission to execute this command');
        $user = Auth::id();
        $delete = Upload::where('_id', $id && 'user_id', $user)->delete();

        return redirect ("/page")->with('Successfully Deleted');

    }

    

}
