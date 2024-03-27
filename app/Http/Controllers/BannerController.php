<?php

namespace App\Http\Controllers;
use App\Models\Banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create()
    {
        $banner = Banner::all();
        return view('banners.create', compact('banner'));
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
                'image' => 'required',
         ]);
        $banner  = new Banner;
        $banner->title = $request->title;
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            $banner->image = $name;
        }

        $banner->status = $request->status;
        $banner->save();
        return redirect('banners')->with('message', 'Banner added successfully');
    }

    function index()
    {

        $banner = Banner::all();
        return view('banners.index', compact('banner'));
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('banners')->with('message', 'Banner deleted successfully');
    }
}
