@extends('layout.app')
<link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/pagination.css')}}">
@section('content')

@include('posts.partials.post')

@endsection