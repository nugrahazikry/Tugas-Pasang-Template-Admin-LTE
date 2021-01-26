<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
    	return view('register');
    }

    public function welcome2(Request $request) {
    	return "Please fill out your name";
    }

    public function welcome2_post(Request $request) {
    	$first_name = $request->first_name;
    	$last_name = $request->last_name;

    	return view('welcome2', compact('first_name','last_name'));
    }
}
