@extends('layout.app')

<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/pagination.css')}}">
@section('content')

<div class="post-wrapper">
    @foreach($posts as $post)
    <a class="post-link" href="{{route('post.show', ['post' =>$post])}}">
        <div class="card">
            <img src="{{Storage::url($post->image->path ?? '')}}" class="post-pic-1" alt="">
            <div class="post-details">
                <p class="category">{{$post->category->name}}</p>
                <p class="post-title">{{Str::limit($post->title, 40)}}</p>
                <p class="post-content">{{Str::limit($post->content, 40)}}</p>
                @if($post->comments_count)
                <div class="added">
                    <p class="created-at">added at {{$post->created_at->diffForHumans()}}</p>
                    <p class="comment-count"><i class="fa fa-comment-o" aria-hidden="true"></i> {{$post->comments_count}} </p>
                </div>
                @else
                <div class="added">
                    <p class="created-at">added at {{$post->created_at->diffForHumans()}}</p>
                    <p class="comment-count">{{$post->comments_count}} <i class="fa fa-comment-o" aria-hidden="true"></i></p>
                </div>
                @endif
            </div>
        </div>
    </a>
    @endforeach
    {{ $posts->links('vendor.pagination.custom') }}
</div>
@endsection