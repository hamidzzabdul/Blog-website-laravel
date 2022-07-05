<div class="section-1">
    <div class="hero-banner">
        @foreach($mostCommented as $post)
        <a href="{{route('post.show', ['post' => $post->id])}}" class="post-container">
            <img class="banner-img" src="{{Storage::url($post->image->path ?? '')}}" alt="" srcset="">
            <div class="post-description">
                <p class="post-category">{{$post->category->name}}</p>
                <p class="post-title">{{Str::limit($post->title, 50)}}</p>
            </div>
        </a>
        @endforeach
        <button class="read-btn"><a href="#">Read more <i class="fa fa-arrow-right" aria-hidden="true" style="margin-left:5px;"></i></a></button>
    </div>

    <div class="top-picks">
        <h1 class="post-header">
            <i class="fa fa-check-circle-o fa-1x check-circle" aria-hidden="true"></i>
            Top Picks
        </h1>
        @foreach($topPicks as $category)
        <div class="picks">
            <p class="top-category">{{$category->name}}</p>
            @foreach($mostCommented as $post)
            <a href="#">{{$post->title}}</a>
            @endforeach
        </div>
        @endforeach
    </div>
</div>

<div class="section-2">
    <h1 class="recent"> Recent Posts</h1>
    <div class="post-wrapper">
        @foreach($posts as $post)
        <a class="post-link" href="{{route('post.show', ['post' =>$post->id])}}">
            <div class="card">
                <img src="{{Storage::url( $post->image->path ?? '')}}" class="post-pic-1" alt="">
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
            @endforeach

        </a>
        {{ $posts->links('vendor.pagination.custom') }}
    </div>
</div>

<div class="section-3">
    <p class="most-popular">Most popular</p>
    <div class="popular-container">
        @foreach($mostPopular as $post)
        <div class="popular-card-container">
            <a class='popular-details' href="{{route('post.show', ['post' => $post->id])}}">
                <img class="post-popular" src="{{Storage::url($post->image->path ?? '')}}" alt="" srcset="">
                <div class="post-details">
                    <p class="popular-category">
                        {{$post->category->name}}
                    </p>
                    <p class="popular-Title">{{Str::limit($post->title, 40)}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>