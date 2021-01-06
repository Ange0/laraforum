<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Topic $topic)
    {
        request()->validate([
            'content' => 'required|min:5'
        ]);

        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = Auth::user()->id;
        $topic->comments()->save($comment);
        
       return  redirect()->route('topics.show',$topic);
    }
}
