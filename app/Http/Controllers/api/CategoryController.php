<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function store(Request $request)
    {
        $category = new \App\Models\Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return response()->json("Category added successfully");
    }

    function index()
    {
        $category = \App\Models\Category::all();
        return response()->json($category);
    }

    function show($id)
    {
        $category = Category::findOrFail($id); 
        return response()->json($category);
    }

    function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return response()->json("Category updated successfully");
    }

    function destroy($id)
    {
        $category = Category::find($id);
        $category->delete(); 
        return response()->json("Category deleted successfully");
    }
    

}
