<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site5controller extends Controller
{
    public function home1()
    {
        return view('site5.home1');
    }

    public function home2()
    {
        return view('site5.home2');
    }

    public function home3()
    {
        return view('site5.home3');
    }

    public function home4()
    {
        return view('site5.home4');
    }

    public function about()
    {
        return view('site5.about');
    }

    public function services()
    {
        return view('site5.services');
    }

    public function projects()
    {
        return view('site5.projects');
    }

    public function single_project()
    {
        return view('site5.single_project');
    }

    public function pricing()
    {
        return view('site5.pricing');
    }

    public function contact()
    {
        return view('site5.contact');
    }

}
