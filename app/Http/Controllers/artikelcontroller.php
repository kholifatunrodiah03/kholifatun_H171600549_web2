<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;

class artikelcontroller extends Controller
{
    public function index(){
    	$artikel=artikel::all();
    	return view('artikel.index', compact('artikel'));
    }
}