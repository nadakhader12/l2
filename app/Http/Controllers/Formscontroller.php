<?php

namespace App\Http\Controllers;
use App\Rules\CheckWordsCount;
use Illuminate\Http\Request;

class Formscontroller extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name'));
        // $name = $request->input('name');
        $name = $request->name;
        $age = $request->age;
        return "Welcome $name, your age is $age";
        // return 'Done';
    }




    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        return view('forms.form2_data', compact('name', 'email', 'age'));
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {

        $request->validate([
            // 'name' => 'required|min:3',
            'name' => ['required', 'min:3', 'max:20'],
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            // 'bio' => 'required| new CheckWordsCount()'
           // 'bio' => ['required', new CheckWordsCount(5)]
        ]);

        dd($request->all());
    }

}
