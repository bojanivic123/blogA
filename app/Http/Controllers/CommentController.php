<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:5|max:5000|string',
            'post_id' => 'required|exists:posts,id'
        ]);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id
        ]);

        return redirect('/posts/' . $request->post_id)->with('status', 'Comment successfully created.');  
    }
}

