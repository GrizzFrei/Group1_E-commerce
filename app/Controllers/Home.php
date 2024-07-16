<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use App\Models\CartModel;
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
        $productsModel = new ProductsModel();
        $productsData['products'] = $productsModel->find();
        return view('allProducts', $productsData);
    }

    public function cart()
    {
        $cartModel = new CartModel();
        $cartQuery = $cartModel->where('user_id', session('id'));
        $cartData['cartProducts'] = $cartQuery->findAll();
        return view('cart', $cartData);
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function getProduct($category)
    {
        //$data['product'] = array(0 => array('category' => $category));
        $productsModel = new ProductsModel();
        $productsQuery = $productsModel->where('product_identifier', $category);
        $productsData['products'] = $productsQuery->findAll();
        return view('specificproducts', $productsData);
    }


}
