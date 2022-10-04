<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Traits\Uploader;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class UploadController extends Controller
{
    use Uploader;

    public function publish(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'language' => 'required',
            'author' => 'required',
            'keywords' => 'required',
            'example' => 'required',
            'summary-upload' => 'required',

        ]);


     // differenciate between publish,dataset,software and workflow when pulling categories from db
       $topic_id = 1;

        // get Authenticated user id 
       $user = Auth::id();

       $path = $this->UploadFile($request->file('summary-upload'), 'Publish');

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

        // dd(publish);

        return redirect ('/page')->with ('status', 'Upload Successful');

    

    }



    public function software(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'language' => 'required',
            'author' => 'required',
            'keywords' => 'required',
            'example' => 'required',
            // 'summary-upload' => 'required',
            'file-upload' => 'required',

        ]);

     // differenciate between publish,dataset,software and workflow when pulling categories from db
       $topic_id = 2;

        // get Authenticated user id 
        $user = Auth::id();


       $path = $this->UploadFile($request->file('file-upload'), 'Software');
        
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

        // dd(publish);

        return redirect ('/page')->with ('status', 'Upload Successful');

    

    }


    public function dataset(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'language' => 'required',
            'author' => 'required',
            'keywords' => 'required',
            'example' => 'required',
            // 'summary-upload' => 'required',
            'file-upload' => 'required',

        ]);

     // differenciate between publish,dataset,software and workflow when pulling categories from db
       $topic_id = 3;


        // get Authenticated user id 
        $user = Auth::id();


       $path = $this->UploadFile($request->file('file-upload'), 'Dataset');
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

        // dd(publish);

        return redirect ('/page')->with ('status', 'Upload Successful');

    

    }


    public function webflow(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'language' => 'required',
            'author' => 'required',
            'keywords' => 'required',
            'example' => 'required',
            // 'summary-upload' => 'required',
            'file-upload' => 'required',

        ]);

     // differenciate between publish,dataset,software and workflow when pulling categories from db
       $topic_id = 4;

        // get Authenticated user id 
       $user = Auth::id();


       $path = $this->UploadFile($request->file('file-upload'), 'Webflow');
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

        // dd(publish);

        return redirect ('/page')->with ('status', 'Upload Successful');

    

    }

    public function uploadlist(){

            
            $user = Auth::id();

            $list = Upload::where('user_id', $user)->get();

            // dd($list);

            return view ('user.upload_list', compact('list', 'user'));
    }

    public function uploadshow($id){
        
        $value = Upload::find($id)->get_class_vars('intoviet', )->get();
        // dd($value);

        return view('user.upload_show')->with('val', $value);
    }

}
