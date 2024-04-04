<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Detail;
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
        foreach ($data as $item) {
            // Assuming the product has an 'image' property in the database
            $product = Product::find($item->id);
            $item->image = $product->image; // Assign image path or URL to the item
        }
    
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

    function placeOrder(Request $request)
    {
        $detail = new Detail;
        $detail->first_name = $request->first_name;
        $detail->last_name = $request->last_name;
        $detail->company_name = $request->company_name;
        $detail->address = $request->address;
        $detail->city = $request->city;
        $detail->country = $request->country;
        $detail->postal_code = $request->postal_code;
        $detail->mobile = $request->mobile;
        $detail->email = $request->email;
        $detail->save();

        return view('razorpayView');
    }
}
