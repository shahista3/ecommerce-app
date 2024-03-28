<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function create()
    {
        $product = Product::all();
        $categories = Category::all();
        return view('products.create', compact('product', 'categories'));
    }

    function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required|string',
             'price' => 'required|numeric|between:0,99.99',

        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->price = $request->price;
        $product->quantity=$request->quantity;
        $product->status = $request->status;
        $product->save();

        return redirect('products')->with('message', 'Product added successfully');
    }

    function index()
    {

        $product  = Product::all();
        return view('products.index', compact('product'));
    }

    function edit($id)
    {
        $product  = Product::find($id);
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }


    public function update(Request $request, $id)

    {
        $validated = $request->validate([
             'title' => 'required|string',
            'price'=> 'required|numeric|between:0,99.99',
        ]);

        $product  = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->input('category_id');
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products')->with('message', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product  = Product::find($id);
        $product->delete();
        return redirect()->route('products')->with('message', 'Product deleted successfully');
    }
}
