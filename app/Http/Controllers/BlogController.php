<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function home(){
    	return view('home');
    }
    public function profile(){
    	return view('profile');
    }
    public function contact(){
    	return view('contact');
    }
}
