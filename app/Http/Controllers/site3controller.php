<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site3controller extends Controller
{
    public function index()
    {
        return view('site3.index');
    }
    public function index2()
    {
        return view('site3.index2');
    }
    public function company()
    {
        return view('site3.company');
    }

    public function projects()
    {
        return view('site3.projects');
    }
    public function projects_single()
    {
        return view('site3.projects_single');
    }
    public function services()
    {
        return view('site3.services');
    }
    public function service_single()
    {
        return view('site3.service_single');
    }

    public function typography()
    {
        return view('site3.typography');
    }
    public function error()
    {
        return view('site3.error');
    }
    public function news_single()
    {
        return view('site3.news_single');
    }

    public function news_left_sidebar()
    {
        return view('site3.news_left_sidebar');
    }

    public function news_right_sidebar()
    {
        return view('site3.news_right_sidebar');
    }
    public function about()
    {
        return view('site3.about');
    }

    public function testimonials()
    {
        return view('site3.testimonials');
    }
    public function faq()
    {
        return view('site3.faq');
    }
    public function pricing()
    {
        return view('site3.pricing');
    }
    public function team()
    {
        return view('site3.team');
    }
    public function contact()
    {
        return view('site3.contact');
    }
}
