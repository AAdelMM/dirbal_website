<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content_id' => 'required|exists:contents,id',
        ]);

        Like::create([
            'content_id' => $request->content_id,
            'user_ip' => $request->ip(),
        ]);

        return back()->with('success', 'تم تسجيل الإعجاب بنجاح');
    }//
}
