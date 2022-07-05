@extends('layout.app')
<link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/pagination.css')}}">
@section('content')
<div class="blog-wrapper">
    @foreach($posts as $post)
    <a class="post-link" href="{{route('post.show', ['post' =>$post->id])}}">
        <div class="card">
            <img class="post-pic-1" src="{{Storage::url($post->image->path ?? '')}}" alt="">
            <div class="post-details">
                <p class="category">{{ $post->category->name }} <span class="time-posted">{{now()->format('d-m-Y')}}</p>
                <p class="post-Title">{{$post->title}}</p>
                <p class="added-at">
                    added {{$post->created_at->diffForHumans()}}
                </p>

            </div>
        </div>
    </a>
    @endforeach
</div>
{{ $posts->links('vendor.pagination.custom') }}

@endsection