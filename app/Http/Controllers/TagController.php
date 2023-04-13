<?php

namespace App\Http\Controllers;

use App\Models\Tag;
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
        $title = $tag->name;

        return view('tags.show', compact('tag', 'title'));
    }
}
