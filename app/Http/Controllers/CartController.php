<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use LaraCart;

class CartController extends Controller
{
    function store(Request $request)
    {
        // dd($request);
        $price = (float)$request->price;
        // dd($price);
        $data = Cart::add($request->id, $request->name, 1,$price);
        return redirect()->back();
    }

    function index()
    {
        $data = Cart::content();
        return view('cart', compact('data'));
    }

    function remove($id)
    {

        Cart::remove($id);
        return redirect()->back();
    }

    function checkoutindex()
    {
        $data = Cart::content();
        return view('checkout', compact('data'));
    }
}
