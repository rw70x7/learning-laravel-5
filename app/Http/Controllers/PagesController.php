<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {

    	$people = [
    	    'Solomon', 'Jesus', 'Paul'
        ];

    	return view('about', compact('people'));
    }

    public function contact(){
        return view('contact');
    }
}
