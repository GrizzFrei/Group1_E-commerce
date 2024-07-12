<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage');
    }
    
    public function contacts()
    {
    return view('contact');
    }

    public function about() 
    {
return view('about');
    }

}
