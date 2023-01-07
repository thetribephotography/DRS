<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
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

    public function uploadlist(){

            
            $user = Auth::id();

            $list = Upload::where('user_id', $user)->get();

            // dd($list);

            return view ('user.upload_list', compact('list', 'user'));
    }

    public function uploadshow($id){
        
        $value = Upload::find($id);

        // return $value;
        dd($value);

        // return view('user.upload_show')->with('value', $value);
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
    
        //     request for specific hidden column and save in variable
        $topic_id = $request->topic_id;
        $file_name = $request->title;
    
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

    return redirect ("/page")->with ("Upload Successful");

}

    

}
