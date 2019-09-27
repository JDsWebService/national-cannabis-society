<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasePagesController extends Controller
{
    // Return the Index Page
    public function index() {
    	return view('index');
    }
}
