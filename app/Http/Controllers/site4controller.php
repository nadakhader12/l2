<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site4controller extends Controller{
    public function about()
    {
        return view('site4.about');
    }

    public function experience()
    {
        return view('site4.experience');
    }

    public function education()
    {
        return view('site4.education');
    }

    public function skills()
    {
        return view('site4.skills');
    }

    public function interests()
    {
        return view('site4.interests');
    }

    public function awards()
    {
        $awards = [
            'cert1',
            'cert2',
            'cert3',
            'cert4',
            'cert5',
            'cert6',
            'cert7',

        ];
        return view('site4.awards')->with('awards',$awards);
    }
}

