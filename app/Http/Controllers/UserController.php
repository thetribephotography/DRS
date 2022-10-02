<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function upload(){
        return view ('user.upload');
    }

    public function published(){
        return view ('user.publish');
    }

    public function softwares(){
        return view ('user.software');
    }

    public function datasets(){
        return view ('user.dataset');
    }

    public function workflows(){
        return view ('user.workflow');
    }
}


