<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function create()
    {
        $data = User::all();
        return view('users.create', compact('data'));
    }

   function store(Request $request)
    { 
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $hashedPassword = Hash::make($request->password);

       // Create a new Blog instance and save it
        $data = new User;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->password = $hashedPassword;
        $data->save();
        return redirect('users')->with('message', 'User added successfully');
    }

    function index()
    {

        $data = User::all();
        return view('users.index', compact('data'));
    }

    function edit($id)
    {
        $data = User::find($id);
        return view('users.edit', compact('data'));
    }


    public function update(Request $request, $id)

    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required',
        ]);
        $data = User::find($id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('users')->with('message', 'User updated successfully');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('users')->with('message', 'User deleted successfully');
    }
}
