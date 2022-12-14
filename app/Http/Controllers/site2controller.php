<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site2controller extends Controller
{
    public function index(){ $name='New content'; return view('site2.index')->with('name',$name);}

    public function about(){  return view('site2.about'); }

    public function contact(){ return view('site2.contact');}

    public function post(){ return view('site2.post');}
}
