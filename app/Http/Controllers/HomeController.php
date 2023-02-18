<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class HomeController extends Controller
{
    public function index(){
        $uploads = Upload::latest('created_at')->where('acesss_id',1)->take(4)->get();

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
