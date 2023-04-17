<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\Uploader;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $title = "Categories";
        $categories = Category::all();
        return view('categories.index', compact('categories', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        //
    }


    //SHOW USER CATEGORY  (No private)
    public function show($slug)
    {

        $category = Category::with('uploads',)->where('slug', $slug)->first();
        $uploads = Upload::whereIn('_id', $category->upload_id)->whereIn("access_id", ["1", "2"])->get();
        $title = "Category - " . $category->name;
        // dd($category, $uploads);
        return view('categories.show', compact('title', 'category', 'uploads'));
    }

    // SHOW ADMIN Category (With Private)
    public function show_admin($id)
    {
        //

        $category = Category::where('_id', $id)->first();
        $title = "";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
