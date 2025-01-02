<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'contents_id' => 'required|integer',
        'section_id' => 'required|integer',
        'branch_id' => 'required|integer',
        'item_id' => 'required|integer',
    ]);

    // Get the user's IP address
    $userIp = $request->ip();

    // Check if the user has already liked this content
    $existingLike = Like::where('contents_id', $request->contents_id)
                        ->where('user_ip', $userIp)
                        ->first();

    if ($existingLike) {
        return response()->json(['success' => false, 'message' => 'You have already liked this content.']);
    }

    // Save the like
    $like = new Like();
    $like->contents_id = $request->contents_id;
    $like->section_id = $request->section_id;
    $like->branch_id = $request->branch_id;
    $like->item_id = $request->item_id;
    $like->user_ip = $userIp;
    $like->save();

    return response()->json(['success' => true, 'message' => 'Like saved successfully.']);
}
}