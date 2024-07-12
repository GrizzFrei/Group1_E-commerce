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

<<<<<<< Updated upstream
    public function about() 
    {
return view('about');
=======
    public function login()
    {
    return view('login');
    }

    public function signup()
    {
    return view('signup');
>>>>>>> Stashed changes
    }

}
