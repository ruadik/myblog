<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $comment = new Comment();
        $comment->text = $request->message;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect()->back()->with('status', 'Ваш комментарий добавлен и скоро будет опублекован!');
    }
}
