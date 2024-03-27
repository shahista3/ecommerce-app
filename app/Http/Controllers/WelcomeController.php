<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;

class WelcomeController extends Controller
{
    //
    public function index()
{
    $category = Category::all();
    $product = Product::all();
    $banner = Banner::all();

    $vegetableProducts = Product::whereHas('category', function ($query) {
            $query->where('name', 'Vegetables');
        })
        ->where('status', 1)
        ->distinct() // Ensure only distinct records are retrieved
        ->get();

    return view('welcome', compact('product', 'category', 'banner', 'vegetableProducts'));
}
    
}
