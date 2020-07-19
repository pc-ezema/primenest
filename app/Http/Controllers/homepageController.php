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

    public function propertyDetail(){
        return view("property-detail");
    }

    public function faq(){
        return view("faq");
    }

    public function contactUs(){
        return view("contact-us");
    }

    public function application(){
        return view("application");
    }
}
