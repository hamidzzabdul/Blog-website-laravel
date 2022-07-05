@extends('layout.app')

<link rel="stylesheet" href="{{URL::asset('css/categories.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/pagination.css')}}">
@section('content')

<div class="category-section">
    <div class="categories">
        <h1 class="category-name">Categories</h1>
        <ol class="all-categories">
            @foreach($categories as $category)
            <div class="one-category">
                <li><a href="{{route('category.show',['category' => $category->id])}}">{{$category->name}}</a></li>
                <form method="POST" class="delete" action="{{ route('category.destroy', ['category' => $category->id]) }}">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="DELETE" class="delete-btn">
                </form>
            </div>
            @endforeach
        </ol>
    </div>

    <div class="add-category">
        <form method="POST" class="form-control" action="{{route('category.store')}}">
            {{ csrf_field() }}
            <h1>Add category</h1>
            <input class="add-input" type="text" placeholder="Enter category" name="name">
            <input type="submit" value="Add category" class="add-btn">
        </form>
    </div>
</div>

@endsection