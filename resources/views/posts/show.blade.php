@extends('layout.app')

<link rel="stylesheet" href="{{URL::asset('css/post-details.css')}}">
@section('content')
<div class="individual-post">
    <div class="post-details">
        <img src="{{  Storage::url($posts->image->path)}}" class="post-banner">
        <div class="author">
            <p class="added-at"> added {{$post->created_at->diffForHumans()}}</p>
            <p class="author-name"> by {{ $post->user->name}}</p>
        </div>
        <div class="post-info">
            <h1 class="second-title">{{ $post->title }}</h1>
            <p class="content">{{ $post->content }} </p>
        </div>
    </div>

    <form action="{{route('post.comments.store', ['post' => $post->id])}}" method="POST" class="comments">
        @csrf

        <div class="add-comment">
            <h2 class="leave-comment"><a href="{{route('login')}}">Login</a> to be able Leave a comment! </h2>
            @auth
            <div class="user-container">
                <input class="comment" type="text" name="content" placeholder="Add a comment...">
                <input type="submit" value="Comment" class="comment-btn" onclick="e.preventDefault();">
            </div>
            <p class="comment-count">Comments ( {{$post->comments_count}} )</p>
            <div class="comment-section">
                @forelse($post->comments as $comment)
                <div class="comment-card">
                    <div class="user"></div>
                    <div class="card">
                        <p class="user-name">{{$comment->user->name}}</p>
                        <p class="comment-content">{{$comment->content}}</p>
                        <div class="like">
                            <p>Reply</p>
                            <p>.</p>
                            <p>share</p>
                            <p>.</p>
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                @empty
                <p>No post yet!</p>
                @endforelse
            </div>
            @endauth
        </div>
    </form>
</div>


@endsection