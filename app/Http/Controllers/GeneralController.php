<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function home()
    {
        return view('index');
    }

    function about()
    {
        return view('templatePages.about');
    }

    function viewBlog()
    {
        return view('templatePages.blog');
    }

    function contact()
    {
        return view('templatePages.contact');
    }
}
