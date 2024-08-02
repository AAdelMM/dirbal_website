<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Article;


class ArticleController extends Controller
{
    public function view(Article $article)
    {
        return view('articles.view', compact('article'));
    }//
}
