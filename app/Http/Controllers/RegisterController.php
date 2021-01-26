<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form() {
    	return view('form');
    }

    public function sapa() {
    	return "Halo Eshole";
    }

    public function sapa_post(Request $request) {
    	
    	return "OKELAH";
    }
}
