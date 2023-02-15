<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Group;
use App\Models\Software;
use App\Models\Tag;
use App\Models\Upload;
use App\Models\User;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;

class UploadController extends Controller
{
    use Uploader;



    public function index(){

            $this->authorize('view_user_post', 'You do not have the permission to access this.');

            $user = Auth::id();

            $list = Upload::where('user_id', $user)->get();

            // dd($list);

            return view ('user.upload_list', compact('list', 'user'));
    }


    public function show($id){
        //
        // $this->authorize('create_post', "You are not authorised");
        $upload = Upload::where('_id', $id)->first();
        return view('user.show_upload', compact('upload'));
    }


    //FUNCTIONS FRO CREATING THE DIFFERENT TYPES OF UPLOADS
    public function create(){
        return view("upload.create");
    }
    public function create_publication(){
        $this->authorize("create_post");

        return view("upload.publication");
    }
    public function create_dataset(){
        $this->authorize("create_post");

        return view("upload.dataset");
    }

    public function create_workflow(){
        $this->authorize("create_post");

        return view("upload.workflow");
    }

    public function create_software(){
        $this->authorize("create_post", "hey");

        $categories = Category::all();
        $tags = Tag::all();
        return view("upload.software", compact('categories', 'tags'));
    }

    public function store( Request $request){

        //Upload type and User
        $user = Auth::id();
        $upload_type = $request->type;

        //PERFORM OPERATION BASED ON UPLOAD TYPE
        if($upload_type === "software"){

            $request->validate([
                'title' => 'required',
                'language' => 'required',
                'file_upload' => ['required', 'mimes:zip,rar'],
                'authors' => 'required',
                'category' => 'required',
            ],
            //Array to specify validation message for a particular validation
    [
                'file_upload.mimes' => 'Accepted file formats is Zip and Rar',
                'categiry.required' => 'Selected field is required. Select at least one category'
            ]
            );

        //Heheehehe
        $upload_type2 = $upload_type;
        $title = $request->title;
        $description = $request->description;
        $categories = $request->category;
        $tags = $request->tags;
        $access_right = $request->access_right;
        $date = $request->date; //Note you havent used this. Aspa stroed it yet
        $authors = explode(",", $request->authors);
        $languages = explode(",", $request->language);
        $file = $request->file('file_upload');
        $path = $this->UploadFile($request->file('file_upload'), $title);
        $file_name = $file->getClientOriginalName(); // File Name
        $file_type = $file->getClientOriginalExtension(); // File type
        $file_size = $file->getSize(); //File size


        $new_software = new Upload;
        $new_software->title = $title;
        $new_software->description = $description;
        $new_software->authors = $authors;
        $new_software->type = $upload_type;
        $new_software->user_id = $user;
        $new_software->path = $path;
        $new_software->acess_rights = $access_right;
        $new_software->category = $categories;
        $new_software->tags = $tags;
        $new_software->languages = $languages;
        $new_software->file_type = $file_type;
        $new_software->file_size = $file_size;

        $new_software->save();
        }//else if($upload_type == "dataset"){

        // }else if($upload_type == "publication"){

        // }else if($upload_type == "workflow"){

        // }
        // $authors = explode(",", $request->authors);
        // $languages = explode(",", $request->language);

        return redirect('/dashboard')->with("Created Successfully");
    }

    public function test(){
        return view('upload.test');
    }
    public function test_upload(Request $request){

        $request->validate([
            'file_upload' => ['required','mimes:jpeg,' ],

        ],
            //Another array to specify validation messages
            ['file_upload.mimes' => 'Only Jpegs are accepted',]
    );

        if($request->hasFile('file_upload')){
            $file = $request->file('file_upload');
            $file_name = $file->getClientOriginalName(); // File Name
            $file_type = $file->getClientOriginalExtension(); // File type
            $file_size = $file->getSize(); //File size
            $folder = uniqid() . '-' . now()->timestamp;  //Create a folder unique to an upload by including the time of creation as folder name


            //Store temporary file to folder
            $file->storeAs('uploads/tmp' . $folder, $file_name);



            return $folder;

        }

        return ''; //If no file was uploaded. Filepond asks for a string
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
    public function publish(Request $request, ){

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
