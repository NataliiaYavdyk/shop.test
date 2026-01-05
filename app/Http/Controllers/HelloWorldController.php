<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HelloWorldController; 
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function show() {
     return view('hello');
    }
}
