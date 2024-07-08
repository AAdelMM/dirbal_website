<?php

namespace App\Http\Controllers;
use App\Models\Quote;
use Illuminate\Http\Request;

class MainHeroController extends Controller
{
    public function getQuotes()
    {
        // Fetch the latest quotes from the database
        $quotes = Quote::select('title', 'body', 'source',)->get();
        return response()->json($quotes);
    }//
}
