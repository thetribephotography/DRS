<?php

namespace App\Http\Controllers;

use App\Models\CategoryUpload;
use App\Models\TagUpload;
use App\Models\Upload;
use App\Models\User;
use App\Models\Group;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Traits\Uploader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\GroupShip;



class UploadController extends Controller
{
    use Uploader;

    public function upload()
    {
        $title = "Upload";
        return view('user.upload', compact('title'));
    }

    public function published()
    {
        $title = "Article Upload";
        $user = Auth::id();
        $find = Group::where('user_id', $user)->orWhere('group_members', $user)->whereNull('deleted_at')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('upload.publish', compact('find', 'categories', 'tags', 'title'));
    }

    public function softwares()
    {
        $title = "Software Upload";
        $user = Auth::id();
        $find = Group::where('user_id', $user)->orWhere('group_members', $user)->whereNull('deleted_at')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('upload.software', compact('find', 'categories', 'tags', 'title'));
    }

    public function datasets()
    {
        $title = "Dataset Upload";
        $user = Auth::id();
        $find = Group::where('user_id', $user)->orWhere('group_members', $user)->whereNull('deleted_at')->get();
        $categories = Category::all();
        $tags = Tag::all();


        return view('upload.dataset', compact('find', 'categories', 'tags', 'title'));
    }

    public function workflows()
    {
        $title = "Workflow Upload";
        $user = Auth::id();
        $find = Group::where('user_id', $user)->orWhere('group_members', $user)->whereNull('deleted_at')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('upload.workflow', compact('find', 'categories', 'tags', 'title'));
    }


    public function uploadlist()
    {

        // $this->authorize('view_user_post', 'You do not have the permission to access this.');

        $title = "Upload | All";
        $user = Auth::id();

        $list = Upload::where('user_id', $user)->where('deleted_at', null)->get();

        // dd($list);

        return view('upload.upload_list', compact('list', 'title'));
    }

    //Shows a Single Upload
    public function public_view($slug)
    {
        $user = Auth::id();
        $title = "View Single Upload";
        $upload = Upload::with('comments', 'users', 'categories', 'tags')
            ->where('slug', $slug)  //Get by slug
            ->whereIn('access_id', ["1"]) //Get only public
            ->first();


        //Track and Record Views using sessions
        if (!session()->has('viewed_post_' . $upload->id)) {
            $upload->increment('views');
            session()->put('viewed_post_' . $upload->id, true);
        }

        // dd($upload);

        // if ($upload->filetype = "xlsx" || $upload->filetype = "csv" || $upload->filetype = "xls" || $upload->filetype = "ods") {
        //     $data = $this->read_excel($upload->path);
        // }

        return view('upload.public_view', compact('upload',  'title',));
    }

    public function download($id)
    {
        $upload = Upload::findOrFail($id);

        // Increment the "downloads" column for the requested file
        if (!session()->has('downloaded_post_' . $upload->id)) {
            $upload->increment('downloads');
            session()->put('downloaded_post_' . $upload->id, true);
        }

        // Return the file as a download response
        return response()->download(storage_path('app/public/' . $upload->path));
    }

    public function read_excel($path)
    {
        $file = asset('storage/' . $path); //
        $csvData = file_get_contents($file);

        $rows = array_map("str_getcsv", explode("\n", $csvData));
        $header = array_shift($rows);

        return [$rows, $header];
    }


    //UPDATE POST
    public function updatepost(Request $request, $id)
    {
        $title = "";
        $this->authorize('update_user_post', 'You dont have the Permission to update these records');

        if ($request->all() == '') {
            return redirect("/dashboard")->with("No Updates were Made");
        } else {

            $update = Upload::where('_id', $id)->whereNull('deleted_at')->first();

            //category save in db as array
            $category = $request->category;
            $cat = [];

            foreach ($category as $categories) {
                $cat[] = $categories;
            }


            // request for hidden column, title and access rights and save in variable

            $file_name = $request->title;
            $access = $request->example;

            //STORE GROUPING ID'S IF CHOSEN
            $groups = [];
            if ($access == 3) {
                $group = $request->grouping;

                foreach ($group as $grouping) {
                    $groups[] = $grouping;
                }
            }

            $path = $this->UploadFile($request->file('file-upload'), $file_name);
            $media = $this->UploadFile($request->file('summary-upload'), $file_name);

            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->published_at = $request->date;
            $upload->language = $request->language;
            $upload->author = $request->author;
            $upload->keywords = $request->keywords;
            $upload->access_id = $request->example;
            $upload->group_id = $groups;
            $upload->topic_id = $topic_id;
            $upload->path = $path;
            $upload->media = $media;
            $upload->category_id = $cat;
            $upload->tags_id = $request->tags;
            $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
            $upload->file_size = $request->file('file-upload')->getSize(); //File size

            $update->update();

            return redirect("/dashboard")->with("Update Successful");
        }
    }






    public function article_save(Request $request)
    {

        $validated = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'language' => 'required',
                'author' => 'required',
                'keywords' => 'required',
                'example' => 'required',
                'topic_id' => 'required',
                'category' => 'required',
                'file-upload' => 'required|mimes:docx,doc,odf,pdf,rtf,txt,md',
                'tags' => 'required',
            ],

            //Array to specify validation message for a particular validation
            [
                'file-upload.mimes' => 'Accepted files - .pdf, .docx, .doc, .txt',
            ]
        );


        //category save in db as array
        $category = $request->category;

        $cat = [];

        foreach ($category as $categories) {
            $cat[] = $categories;
        }

        //Convert string to array for Array Fields
        $authors = explode(",", $request->author);
        $keywords = explode(",", $request->keywords);
        $languages = explode(",", $request->language);

        //     request for hidden column, title and access rights and save in variable
        $topic_id = $request->topic_id;
        $file_name = $request->title;
        $access = $request->example;

        //STORE GROUPING ID'S IF CHOSEN
        $groups = [];
        if ($access == 3) {
            $group = $request->grouping;


            foreach ($group as $grouping) {
                $groups[] = $grouping;
            }
        }


        //Verify upload typee
        if ($topic_id == 1) {
            //    1 = publish

            $user = Auth::id();
            $path = $this->UploadFile($request->file('file-upload'), $file_name, 'public', $file_name);


            $upload = new Upload;
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->published_at = $request->date;
            $upload->language = $languages;
            $upload->author = $authors;
            $upload->keywords = $keywords;
            $upload->dio = $request->dio;
            $upload->access_id = $request->example;
            $upload->group_id = $groups;
            $upload->topic_id = $topic_id;
            $upload->license = $request->license;
            $upload->path = $path;
            $upload->user_id = $user;
            $upload->category_id = $cat;
            $upload->slug = Str::slug($upload->title); //Slug for better retrieval
            $upload->tags_id = $request->tags;
            $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
            $upload->file_size = $request->file('file-upload')->getSize(); //File size

            $upload->save();

            //Category - Upload Relationship
            foreach ($cat as $categoryd) {
                $categoryd = Category::find($categoryd);

                if ($categoryd) {
                    $categoryd->uploads()->attach($upload->id);
                    CategoryUpload::create([
                        'category_id' => $categoryd->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }
            //Tag - Upload Relationship
            foreach ($request->tags as $tag) {
                $tag = Tag::find($tag);

                if ($tag) {
                    $tag->uploads()->attach($upload->id);
                    TagUpload::create([
                        'tag_id' => $tag->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }

            //GROUP Functionality
            if ($groups) {

                foreach ($groups as $groupings) {
                    $grp = Group::find($groupings);
                    $grp->upload()->attach($upload->id);
                    GroupShip::create([
                        'group_id' => $grp->_id,
                        'uploads' => $upload->_id,
                    ]);
                }
            }
        }
        return redirect("/dashboard")->with("success", "Upload Successful");
    }
    public function article_edit($slug)
    {
        $title = "Edit Upload";
        $user = Auth::id();
        $upload = Upload::where('user_id', $user)
            ->where('slug', $slug)->first();

        $categories = Category::all();
        $tags = Tag::all();
        $find = [];
        $groups = [];


        return view("upload.article_edit", compact("title", "upload", "tags", "categories", "find", "groups"));
    }

    public function dataset_save(Request $request)
    {

        $validated = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'language' => 'required',
                'author' => 'required',
                'keywords' => 'required',
                'example' => 'required',
                'topic_id' => 'required',
                'category' => 'required',
                'file-upload' => 'required|mimes:csv,xls,xlsx,json,txt,zip,rar,tar.gz',
                'tags' => 'required',
                'summary-upload' => 'required|mimes:jpeg,png,jpg,mp4',
            ],

            //Array to specify validation message for a particular validation
            [
                'file-upload.mimes' => 'Accepted files - csv,xls,txt,xlsx,zip,tar',
            ]
        );


        //category save in db as array
        $category = $request->category;

        $cat = [];

        foreach ($category as $categories) {
            $cat[] = $categories;
        }

        //Convert string to array for Array Fields
        $authors = explode(",", $request->author);
        $keywords = explode(",", $request->keywords);
        $languages = explode(",", $request->language);

        //     request for hidden column, title and access rights and save in variable
        $topic_id = $request->topic_id;
        $file_name = $request->title;
        $access = $request->example;

        //STORE GROUPING ID'S IF CHOSEN
        $groups = [];
        if ($access == 3) {
            $group = $request->grouping;


            foreach ($group as $grouping) {
                $groups[] = $grouping;
            }
        }


        //Verify upload type
        if ($topic_id == 3) {
            //    1 = publish

            $user = Auth::id();
            $path = $this->UploadFile($request->file('file-upload'), $file_name, 'public', $file_name);
            $media = $this->UploadFile($request->file('summary-upload'), $file_name);


            $upload = new Upload;
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->published_at = $request->date; //Date
            $upload->language = $languages;
            $upload->author = $authors;
            $upload->keywords = $keywords;
            $upload->access_id = $request->example;
            $upload->group_id = $groups;
            $upload->topic_id = $topic_id;
            $upload->license = $request->license;
            $upload->path = $path;
            $upload->user_id = $user;
            $upload->category_id = $cat;
            $upload->media = $media;
            $upload->slug = Str::slug($upload->title); //Slug for better retrieval
            $upload->tags_id = $request->tags;
            $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
            $upload->file_size = $request->file('file-upload')->getSize(); //File size

            $upload->save();

            //Category - Upload Relationship
            foreach ($cat as $categoryd) {
                $categoryd = Category::find($categoryd);

                if ($categoryd) {
                    $categoryd->uploads()->attach($upload->id);
                    CategoryUpload::create([
                        'category_id' => $categoryd->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }
            //Tag - Upload Relationship
            foreach ($request->tags as $tag) {
                $tag = Tag::find($tag);

                if ($tag) {
                    $tag->uploads()->attach($upload->id);
                    TagUpload::create([
                        'tag_id' => $tag->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }

            //GROUP Functionality
            if ($groups) {

                foreach ($groups as $groupings) {
                    $grp = Group::find($groupings);
                    $grp->upload()->attach($upload->id);
                    GroupShip::create([
                        'group_id' => $grp->_id,
                        'uploads' => $upload->_id,
                    ]);
                }
            }
        }
        return redirect("/dashboard")->with("success", "Upload Successful");
    }

    public function dataset_edit($slug)
    {
        $title = "Edit Upload";
        $user = Auth::id();
        $upload = Upload::where('user_id', $user)
            ->where('slug', $slug)->first();

        $categories = Category::all();
        $tags = Tag::all();
        $find = [];
        $groups = [];


        return view("upload.dataset_edit", compact("title", "upload", "tags", "categories", "find", "groups"));
    }
    public function software_save(Request $request)
    {

        $validated = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'language' => 'required',
                'author' => 'required',
                'keywords' => 'required',
                'example' => 'required',
                'topic_id' => 'required',
                'category' => 'required',
                'file-upload' => 'required|mimes:zip,exe,dmg,zip,rar',
                'tags' => 'required',
                'summary-upload' => 'required|mimes:jpeg,png,jpg,mp4,webm,mkv,rar,zip',
            ],

            //Array to specify validation message for a particular validation
            [
                'file-upload.mimes' => 'Accepted files - .zip, .tar.gz, .exe, .dmg,.zip, .rar',
                'summary-upload.mimes' => 'Accepted files - mp4, png, jpg jpeg',
            ]
        );


        //category save in db as array
        $category = $request->category;

        $cat = [];

        foreach ($category as $categories) {
            $cat[] = $categories;
        }

        //Convert string to array for Array Fields
        $authors = explode(",", $request->author);
        $keywords = explode(",", $request->keywords);
        $languages = explode(",", $request->language);

        //Request for hidden column, title and access rights and save in variable
        $topic_id = $request->topic_id;
        $file_name = $request->title;
        $access = $request->example;

        //STORE GROUPING ID'S IF CHOSEN
        $groups = [];
        if ($access == 3) {
            $group = $request->grouping;


            foreach ($group as $grouping) {
                $groups[] = $grouping;
            }
        }


        //Verify upload type
        if ($topic_id == 2) {
            //    1 = publish

            $user = Auth::id();
            $path = $this->UploadFile($request->file('file-upload'), $file_name, 'public', $file_name);
            $media = $this->UploadFile($request->file('summary-upload'), $file_name);


            $upload = new Upload;
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->published_at = $request->date;
            $upload->language = $languages;
            $upload->author = $authors;
            $upload->keywords = $keywords;
            $upload->access_id = $request->example;
            $upload->group_id = $groups;
            $upload->topic_id = $topic_id;
            $upload->license = $request->license;
            $upload->path = $path;
            $upload->user_id = $user;
            $upload->category_id = $cat;
            $upload->media = $media;
            $upload->slug = Str::slug($upload->title); //Slug for better retrieval
            $upload->tags_id = $request->tags;
            $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
            $upload->file_size = $request->file('file-upload')->getSize(); //File size

            $upload->save();

            //Category - Upload Relationship
            foreach ($cat as $categoryd) {
                $categoryd = Category::find($categoryd);

                if ($categoryd) {
                    $categoryd->uploads()->attach($upload->id);
                    CategoryUpload::create([
                        'category_id' => $categoryd->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }
            //Tag - Upload Relationship
            foreach ($request->tags as $tag) {
                $tag = Tag::find($tag);

                if ($tag) {
                    $tag->uploads()->attach($upload->id);
                    TagUpload::create([
                        'tag_id' => $tag->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }

            //GROUP Functionality
            if ($groups) {

                foreach ($groups as $groupings) {
                    $grp = Group::find($groupings);
                    $grp->upload()->attach($upload->id);
                    GroupShip::create([
                        'group_id' => $grp->_id,
                        'uploads' => $upload->_id,
                    ]);
                }
            }
        }
        return redirect("/dashboard")->with("success", "Upload Successful");
    }
    public function software_edit($slug)
    {
        $title = "Edit Upload";
        $user = Auth::id();
        $upload = Upload::where('user_id', $user)
            ->where('slug', $slug)->first();

        $categories = Category::all();
        $tags = Tag::all();
        $find = [];
        $groups = [];


        return view("upload.software_edit", compact("title", "upload", "tags", "categories", "find", "groups"));
    }

    public function workflow_save(Request $request)
    {

        $validated = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'language' => 'required',
                'author' => 'required',
                'keywords' => 'required',
                'example' => 'required',
                'topic_id' => 'required',
                'category' => 'required',
                'file-upload' => 'required|mimes:zip,rar,cwl,json,yaml,yml,sh',
                'tags' => 'required',
                'summary-upload' => 'required|mimes:jpeg,png,jpg,mp4',
            ],

            //Array to specify validation message for a particular validation
            [
                'file-upload.mimes' => 'Accepted files -zip,rar .cwl, .json, .yaml, .yml, .sh',
                'summary-upload.mimes' => 'Accepted files - mp4, png, jpg jpeg',
            ]
        );


        //category save in db as array
        $category = $request->category;

        $cat = [];

        foreach ($category as $categories) {
            $cat[] = $categories;
        }

        //Convert string to array for Array Fields
        $authors = explode(",", $request->author);
        $keywords = explode(",", $request->keywords);
        $languages = explode(",", $request->language);

        //Request for hidden column, title and access rights and save in variable
        $topic_id = $request->topic_id;
        $file_name = $request->title;
        $access = $request->example;

        //STORE GROUPING ID'S IF CHOSEN
        $groups = [];
        if ($access == 3) {
            $group = $request->grouping;


            foreach ($group as $grouping) {
                $groups[] = $grouping;
            }
        }

        //Verify upload type
        if ($topic_id == 4) {
            //    1 = publish

            $user = Auth::id();
            $path = $this->UploadFile($request->file('file-upload'), $file_name, 'public', $file_name);
            $media = $this->UploadFile($request->file('summary-upload'), $file_name);


            $upload = new Upload;
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->published_at = $request->date;
            $upload->language = $languages;
            $upload->author = $authors;
            $upload->keywords = $keywords;
            $upload->access_id = $request->example;
            $upload->group_id = $groups;
            $upload->topic_id = $topic_id;
            $upload->license = $request->license;
            $upload->path = $path;
            $upload->user_id = $user;
            $upload->category_id = $cat;
            $upload->media = $media;
            $upload->slug = Str::slug($upload->title); //Slug for better retrieval
            $upload->tags_id = $request->tags;
            $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
            $upload->file_size = $request->file('file-upload')->getSize(); //File size

            $upload->save();

            //Category - Upload Relationship
            foreach ($cat as $categoryd) {
                $categoryd = Category::find($categoryd);

                if ($categoryd) {
                    $categoryd->uploads()->attach($upload->id);
                    CategoryUpload::create([
                        'category_id' => $categoryd->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }
            //Tag - Upload Relationship
            foreach ($request->tags as $tag) {
                $tag = Tag::find($tag);

                if ($tag) {
                    $tag->uploads()->attach($upload->id);
                    TagUpload::create([
                        'tag_id' => $tag->id,
                        'upload_id' => $upload->id,
                    ]);
                }
            }

            //GROUP Functionality
            if ($groups) {

                foreach ($groups as $groupings) {
                    $grp = Group::find($groupings);
                    $grp->upload()->attach($upload->id);
                    GroupShip::create([
                        'group_id' => $grp->_id,
                        'uploads' => $upload->_id,
                    ]);
                }
            }
        }
        return redirect("/dashboard")->with("success", "Upload Successful");
    }

    public function workflow_edit($slug)
    {
        $title = "Edit Upload";
        $user = Auth::id();
        $upload = Upload::where('user_id', $user)
            ->where('slug', $slug)->first();

        $categories = Category::all();
        $tags = Tag::all();
        $find = [];
        $groups = [];


        return view("upload.workflow_edit", compact("title", "upload", "tags", "categories", "find", "groups"));
    }







    public function delete($id)
    {
        // $this->authorize('delete_user_post', 'You do not have the permission to execute this command');
        $upload = Upload::find($id);

        // Get the file path from the $upload object
        $file_path = $upload->path;

        // Delete the file from storage
        Storage::delete($file_path);


        // Delete Associated relationships (One-to-many)
        $upload->comments()->delete();
        $upload->group()->delete();


        // // Delete Associated relationships (many-to-many)
        // // Detach all categories associated with the upload
        // foreach ($upload->categories as $category) {
        //     $upload->categories()->detach($category->id);
        // }

        // // Detach all tags associated with the upload
        // foreach ($upload->tag as $tag) {
        //     $upload->tag()->detach($tag->id);
        // }


        $upload->categories()->detach();
        $upload->tags()->detach();


        //Delete file from Databse
        $upload->delete();




        return redirect()->back()->with("success", 'Upload deleted Successfully');
    }












    //NOT IN USE
    // // REMEMBER TO UPLOAD MULTIPLE FILES CODE TO ONE PATH(1 for file, 1 FOR VIDEOS/IMAGES)
    // public function publish(Request $request)
    // {

    //     $validated = $request->validate(
    //         [
    //             'title' => 'required',
    //             'description' => 'required',
    //             'date' => 'required',
    //             'language' => 'required',
    //             'author' => 'required',
    //             'keywords' => 'required',
    //             'example' => 'required',
    //             'topic_id' => 'required',
    //             'category' => 'required',
    //             'file-upload' => 'required',
    //             'tags' => 'required',
    //             'summary-upload' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4',

    //         ]

    //         //Array to specify validation message for a particular validation
    //         // [
    //         //     'summary_upload.mimes' => 'File types jpeg,png,jpg,gif,svg,mp4 are advised',
    //         //     'categiry.required' => 'Selected field is required. Select at least one category'
    //         // ]
    //     );


    //     //category save in db as array
    //     $category = $request->category;

    //     $cat = [];

    //     foreach ($category as $categories) {
    //         $cat[] = $categories;
    //     }


    //     //     request for hidden column, title and access rights and save in variable
    //     $topic_id = $request->topic_id;
    //     $file_name = $request->title;
    //     $access = $request->example;

    //     //STORE GROUPING ID'S IF CHOSEN
    //     $groups = [];
    //     if ($access == 3) {
    //         $group = $request->grouping;


    //         foreach ($group as $grouping) {
    //             $groups[] = $grouping;
    //         }
    //     }


    //     //Analyse and divert function based on form info collected.
    //     if ($topic_id == 1) {
    //         //    1 = publish

    //         $user = Auth::id();

    //         $path = $this->UploadFile($request->file('file-upload'), $file_name);
    //         $media = $this->UploadFile($request->file('summary-upload'), $file_name);

    //         $upload = new Upload;
    //         $upload->title = $request->title;
    //         $upload->description = $request->description;
    //         $upload->published_at = $request->date;
    //         $upload->language = $request->language;
    //         $upload->author = $request->author;
    //         $upload->keywords = $request->keywords;
    //         $upload->access_id = $request->example;
    //         $upload->group_id = $groups;
    //         $upload->topic_id = $topic_id;
    //         $upload->path = $path;
    //         $upload->media = $media;
    //         $upload->user_id = $user;
    //         $upload->category_id = $cat;
    //         $upload->slug = Str::slug($upload->title); //Slug for better retrieval
    //         $upload->tags_id = $request->tags;
    //         $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
    //         $upload->file_size = $request->file('file-upload')->getSize(); //File size

    //         $upload->save();

    //         //Category - Upload Relationship
    //         foreach ($cat as $categoryd) {
    //             $categoryd = Category::find($categoryd);

    //             if ($categoryd) {
    //                 $categoryd->uploads()->attach($upload->id);
    //                 CategoryUpload::create([
    //                     'category_id' => $categoryd->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }
    //         //Tag - Upload Relationship
    //         foreach ($request->tags as $tag) {
    //             $tag = Tag::find($tag);

    //             if ($tag) {
    //                 $tag->uploads()->attach($upload->id);
    //                 TagUpload::create([
    //                     'tag_id' => $tag->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }

    //         //GROUP Functionality
    //         if ($groups) {

    //             foreach ($groups as $groupings) {
    //                 $grp = Group::find($groupings);
    //                 $grp->upload()->attach($upload->id);
    //                 GroupShip::create([
    //                     'group_id' => $grp->_id,
    //                     'uploads' => $upload->_id,
    //                 ]);
    //             }
    //         }
    //     } else if ($topic_id == 2) {
    //         //    2 = software
    //         $user = Auth::id();

    //         $path = $this->UploadFile($request->file('file-upload'), $file_name);
    //         $media = $this->UploadFile($request->file('summary-upload'), $file_name);

    //         $upload = new Upload;
    //         $upload->title = $request->title;
    //         $upload->description = $request->description;
    //         $upload->published_at = $request->date;
    //         $upload->language = $request->language;
    //         $upload->author = $request->author;
    //         $upload->keywords = $request->keywords;
    //         $upload->access_id = $request->example;
    //         $upload->group_id = $groups;
    //         $upload->topic_id = $topic_id;
    //         $upload->path = $path;
    //         $upload->media = $media;
    //         $upload->user_id = $user;
    //         $upload->category_id = $cat;
    //         $upload->slug = Str::slug($upload->title); //Slug for better retrieval
    //         $upload->tags_id = $request->tags;
    //         $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
    //         $upload->file_size = $request->file('file-upload')->getSize(); //File size

    //         $upload->save();

    //         //Category - Upload Relationship
    //         foreach ($cat as $categoryd) {
    //             $categoryd = Category::find($categoryd);

    //             if ($categoryd) {
    //                 $categoryd->uploads()->attach($upload->id);
    //                 CategoryUpload::create([
    //                     'category_id' => $categoryd->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }
    //         //Tag - Upload Relationship
    //         foreach ($request->tags as $tag) {
    //             $tag = Tag::find($tag);

    //             if ($tag) {
    //                 $tag->uploads()->attach($upload->id);
    //                 TagUpload::create([
    //                     'tag_id' => $tag->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }
    //         //GROUP Functionality
    //         if ($groups) {

    //             foreach ($groups as $groupings) {
    //                 $grp = Group::find($groupings);
    //                 $grp->upload()->attach($upload->id);
    //                 GroupShip::create([
    //                     'group_id' => $grp->_id,
    //                     'uploads' => $upload->_id,
    //                 ]);
    //             }
    //         }
    //     } else if ($topic_id == 3) {
    //         //    3 = dataset

    //         // get Authenticated user id
    //         $user = Auth::id();

    //         $path = $this->UploadFile($request->file('file-upload'), $file_name);
    //         $media = $this->UploadFile($request->file('summary-upload'), $file_name);

    //         $upload = new Upload;
    //         $upload->title = $request->title;
    //         $upload->description = $request->description;
    //         $upload->published_at = $request->date;
    //         $upload->language = $request->language;
    //         $upload->author = $request->author;
    //         $upload->keywords = $request->keywords;
    //         $upload->access_id = $request->example;
    //         $upload->group_id = $groups;
    //         $upload->topic_id = $topic_id;
    //         $upload->path = $path;
    //         $upload->media = $media;
    //         $upload->user_id = $user;
    //         $upload->category_id = $cat;
    //         $upload->slug = Str::slug($upload->title); //Slug for better retrieval
    //         $upload->tags_id = $request->tags;
    //         $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
    //         $upload->file_size = $request->file('file-upload')->getSize(); //File size

    //         $upload->save();

    //         //Category - Upload Relationship
    //         foreach ($cat as $categoryd) {
    //             $categoryd = Category::find($categoryd);

    //             if ($categoryd) {
    //                 $categoryd->uploads()->attach($upload->id);
    //                 CategoryUpload::create([
    //                     'category_id' => $categoryd->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }
    //         //Tag - Upload Relationship
    //         foreach ($request->tags as $tag) {
    //             $tag = Tag::find($tag);

    //             if ($tag) {
    //                 $tag->uploads()->attach($upload->id);
    //                 TagUpload::create([
    //                     'tag_id' => $tag->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }
    //         //GROUP Functionality
    //         if ($groups) {

    //             foreach ($groups as $groupings) {
    //                 $grp = Group::find($groupings);
    //                 $grp->upload()->attach($upload->id);
    //                 GroupShip::create([
    //                     'group_id' => $grp->_id,
    //                     'uploads' => $upload->_id,
    //                 ]);
    //             }
    //         }
    //     } else if ($topic_id == 4) {
    //         //    4 = workflow

    //         // get Authenticated user id
    //         $user = Auth::id();

    //         $path = $this->UploadFile($request->file('file-upload'), $file_name);
    //         $media = $this->UploadFile($request->file('summary-upload'), $file_name);

    //         $upload = new Upload;
    //         $upload->title = $request->title;
    //         $upload->description = $request->description;
    //         $upload->published_at = $request->date;
    //         $upload->language = $request->language;
    //         $upload->author = $request->author;
    //         $upload->keywords = $request->keywords;
    //         $upload->access_id = $request->example;
    //         $upload->group_id = $groups;
    //         $upload->topic_id = $topic_id;
    //         $upload->path = $path;
    //         $upload->media = $media;
    //         $upload->user_id = $user;
    //         $upload->category_id = $cat;
    //         $upload->slug = Str::slug($upload->title); //Slug for better retrieval
    //         $upload->tags_id = $request->tags;
    //         $upload->file_type = $request->file('file-upload')->getClientOriginalExtension(); // File type
    //         $upload->file_size = $request->file('file-upload')->getSize(); //File size

    //         $upload->save();

    //         //Category - Upload Relationship
    //         foreach ($cat as $categoryd) {
    //             $categoryd = Category::find($categoryd);

    //             if ($categoryd) {
    //                 $categoryd->uploads()->attach($upload->id);
    //                 CategoryUpload::create([
    //                     'category_id' => $categoryd->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }
    //         //Tag - Upload Relationship
    //         foreach ($request->tags as $tag) {
    //             $tag = Tag::find($tag);

    //             if ($tag) {
    //                 $tag->uploads()->attach($upload->id);
    //                 TagUpload::create([
    //                     'tag_id' => $tag->id,
    //                     'upload_id' => $upload->id,
    //                 ]);
    //             }
    //         }

    //         //GROUP Functionality
    //         if ($groups) {

    //             foreach ($groups as $groupings) {
    //                 $grp = Group::find($groupings);
    //                 $grp->upload()->attach($upload->id);
    //                 GroupShip::create([
    //                     'group_id' => $grp->_id,
    //                     'uploads' => $upload->_id,
    //                 ]);
    //             }
    //         }
    //     }

    //     // if ($access == 3){

    //     //     $id = $request->grouping;
    //     //     $update = Group::where('_id', $id)->first();
    //     //     $upload_id = $upload->_id;

    //     //     $update->upload = $upload_id;
    //     //     $update->update();
    //     // }

    //     return redirect("/dashboard")->with("success", "Upload Successful");
    // }
}
