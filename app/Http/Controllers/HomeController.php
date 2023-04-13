<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //Current will take even private
        $uploads = Upload::with('users')->whereIn("access_id", [1, 2])->latest('created_at')->take(6)->get();
        // $uploads = Upload::latest('created_at')->where('acesss_id', 1)->take(6)->get();
        $title = "Home|SoftwareRepoHub";
        return view('landing', compact('uploads', 'title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('about', compact('title'));
    }

    public function terms()
    {
        $title = "Terms and Conditions";
        return view('terms', compact('title'));
    }

    public function contact()
    {
        $title = "Contact Us";
        return view('contact', compact('title'));
    }
}
