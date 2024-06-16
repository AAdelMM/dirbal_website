<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class favorite extends Controller
{
    public function index()
    {
        
        return view('homePage.favorite', compact('favorite'));
    } //
}
