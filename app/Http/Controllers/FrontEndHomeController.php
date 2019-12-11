<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndHomeCOntroller extends Controller
{
    public function index()
    {
    	return view('user.index');
    }
}
