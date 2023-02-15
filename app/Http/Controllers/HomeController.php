<?php

namespace App\Http\Controllers;
use App\Models\Upload;


class HomeController extends Controller
{
    public function index(){

        // Get the latest *PUBLIC* datasets (4)
        $uploads = Upload::latest('created_at')->where('acess_rights',"public")->take(4)->get();

        return view('landing', compact('uploads'));
    }

    public function about(){
        return view('about');
    }

    public function terms(){
        return view('terms');
    }

    public function contact(){
        return view('contact');
    }
}
