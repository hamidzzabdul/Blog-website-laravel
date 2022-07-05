@extends('layout.app')

<link rel="stylesheet" href="{{URL::asset('css/post.css')}}">
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
@section('content')

<form action="{{route('post.store')}} " method="POST" enctype="multipart/form-data">
    @csrf
    @include('posts.partials.form')
</form>

@endsection