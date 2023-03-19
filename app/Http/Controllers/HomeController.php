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
        $uploads = Upload::latest('created_at')->where('acesss_id', 1)->take(4)->get();
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
