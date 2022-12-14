<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
      $name='nada khader';
      $desc='weeeeeeeeeeeeb developer';
      return view('index')->with('name',$name)->with('desc',$desc);
    }
    public function about()
    {
      return 'about page';
    }
    public function contact()
    {
      return 'contact page';
    }

    public function team()
    {
      return 'team page';
    }
    public function news($id=null)
    {
      return 'news '.$id;
    }
}
