<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function index()
    {
        return view('testimonial');
    }
}
