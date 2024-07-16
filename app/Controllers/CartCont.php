<?php

namespace App\Controllers;
use App\Models\CartModel;
class CartCont extends BaseController
{

    public function addToCart()
    {
        $cartModel = new CartModel();
        $cartData = [
            'product_id' => $this->request->getPost('product_id'),
            'user_id' => session()->get('id'),
            'product_identifier' => $this->request->getPost('product_identifier'),
            'product_price' => $this->request->getPost('product_price'),
            'product_name' => $this->request->getPost('product_name'),
        ];

        $cartModel->save($cartData);
        return redirect()->back()->with('success', 'Successfully added product to cart!');
    }

    public function deleteFromCart($id = null)
    {
        $cartModel = new CartModel();
        $cartModel->delete($id);

        return redirect()->back();
    }


}