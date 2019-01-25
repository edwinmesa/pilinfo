<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function location()
    {
        return view('location');
    }

    public function forum()
    {
        return view('forum');
    }
}
