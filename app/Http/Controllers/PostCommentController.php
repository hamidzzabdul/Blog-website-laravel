<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComment;

class PostCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }

    //route model binding
    public function store(BlogPost $post, StoreComment $request)
    {
        $post->comments()->create([
            //read content of the comment
            'content' => $request->input('content'),
            //currently authenticated user
            'user_id' => $request->user()->id
        ]);


        return redirect()->back();
    }
}
