<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email',
            'table_name' => 'required|string',
            'contents_id' => 'required|integer',
            'author' => 'required|string',
            'comment' => 'required|string',
        ]);

       // Save the comment
       $comment = Comment::create([
        'email' => $request->email,
        'table_name' => $request->table_name,
        'contents_id' => $request->contents_id,
        'author' => $request->author,
        'comment' => $request->comment,
    ]);

    // If "Save Guest Data" is checked, save to cookies/localStorage
    if ($request->has('save_guest_data')) {
        cookie()->queue('guest_email', $request->email, 60 * 24 * 30); // Save for 30 days
    }

    return redirect()->back()->with('success', 'Comment saved successfully!');
}
}
