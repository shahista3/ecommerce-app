<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function create()
    {
        $category = Category::all();
        return view('categories.create', compact('category'));
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',

        ]);

        $category  = new Category;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect('categories')->with('message', 'Category added successfully');
    }

    function index()
    {

        $category = Category::all();
        return view('categories.index', compact('category'));
    }

    function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, $id)

    {
        $validated = $request->validate([
            'name' => 'required|string',

        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('categories')->with('message', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories')->with('message', 'Category deleted successfully');
    }
}
