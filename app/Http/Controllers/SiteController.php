<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function category()
    {
        return view('site.category');
    }
    public function about()
    {
        return view('site.about');
    }
}