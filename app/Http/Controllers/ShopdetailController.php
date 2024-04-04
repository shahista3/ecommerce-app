<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;

class ShopdetailController extends Controller
{
    function index($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('shopdetail', compact('category', 'product'));
    }

    public function storeReview(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'review' => 'required|string',
            'product_id' => 'required|exists:products,id',
        ]);

        // Create a new Review instance
        $review = new Review;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->review = $request->review;

        // Fetch the product based on the provided product_id
        $product = Product::find($request->product_id);

        // Check if the product exists
        if ($product) {
            // Set the product_id of the review
            $review->product_id = $product->id;


            $review->save();

            return redirect()->route('shopdetail.index', $product->id)->with('success', 'Review submitted successfully.');
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        // Retrieve the category ID of the current product
        $categoryId = $product->category_id;

        // Query for related products belonging to the same category
        $relatedProducts = Product::where('category_id', $categoryId)
            ->where('id', '!=', $product->id) // Exclude the current product
            ->inRandomOrder() // Optionally, you can randomize the order
            ->limit(3) // Limit the number of related products to display
            ->get();

        // Pass both product and related products data to the view
        return view('shopdetail.show', ['product' => $product, 'relatedProducts' => $relatedProducts]);
    }
}
