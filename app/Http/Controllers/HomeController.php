<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Exceptions\ViewExceptionWithSolution;

class HomeController extends Controller
{
    //
    //Index - show all group
    // show - showw single group
    // create
    // store
    // edit
    // update
    // destroy

    public function index(){
        return view('layout');
    }

    public function about(){
        return view('about');
    }

    public function terms(){
        return view('terms');
    }

}
