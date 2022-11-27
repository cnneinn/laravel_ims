<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function AboutMethod(){
        return view('about');   
    }

    public function ContactMethod(){
        return view('contact');   
    }
}
