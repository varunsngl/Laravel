<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyConteroller extends Controller
{
    public function about()
    {
		$names = [
			'Inder',
			'Rajwant',
			'Neha',
			'Akbir'
		];

		return view('about', compact('names'));
    }

    public function login()
    {
    	return view('login');
    }
}
