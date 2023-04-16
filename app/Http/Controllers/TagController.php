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

        $title = "Tags";
        $tags = Tag::all();

        return view('tags.index', compact('tags', 'title'));
    }

    public function show($slug)
    {
        $tag = Tag::with('uploads')->where('slug', $slug)->first();
        $uploads = Upload::whereIn('_id', $tag->upload_id)->get();
        $title = $tag->name;

        return view('tags.show', compact('tag', 'title'));
    }
}
