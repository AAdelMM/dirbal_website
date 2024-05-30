<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content_id' => 'required|exists:contents,id',
            'author' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        Comment::create($request->all());

        return back()->with('success', 'تم إضافة التعليق بنجاح');
    }//
}
