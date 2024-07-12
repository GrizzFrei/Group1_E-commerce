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
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function allProducts()
    {
        return view('allProducts');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function getProduct($category)
    {
        $data['product'] = array(0 => array('category' => $category));
        return view('specificproducts', $data);
    }


}
