@foreach($blogs as $blog)
<img src="{{Storage::url($blog->path)}}" class="post-pic-1" alt="">
@endforeach