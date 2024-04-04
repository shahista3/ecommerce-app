<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    function index()
    {
    $category = Category::all();
    $product = Product::all();
    return view('shop', compact('category','product'));
    }


}
