<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Upload;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //

    public function index()
    {

        $title = "Tags | All";
        $tags = Tag::all();

        return view('tags.index', compact('tags', 'title'));
    }

    public function show($slug)
    {
        $tag = Tag::with('uploads')->where('slug', $slug)->first();
        $uploads = Upload::whereIn('_id', $tag->upload_id)->whereIn("access_id", ["1", "2"])->get();
        $title = "Tag - " . $tag->name;

        return view('tags.show', compact('tag', 'title', 'uploads'));
    }
}
