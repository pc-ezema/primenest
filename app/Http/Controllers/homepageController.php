<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }

    public function property(){
        return view("properties");
    }
}
