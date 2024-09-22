<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Sepet içeriğini almak için gereken işlemler
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {


        $cartItems = [1];
    
    }

    // Diğer işlemler (ürün çıkarma, güncelleme vb.) burada tanımlanabilir
}
