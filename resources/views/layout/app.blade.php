<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/cb6817568b.js"></script>
    <title>Laravel-Blog</title>

</head>

<body>
    <nav>
        <div class="nav-bar">
            <!-- hambuger  and search btn-->
            <div class="hambuger">
                <button class="bars">
                    <i class="fa fa-bars bars" aria-hidden="true"></i>
                </button>
                <p class="menu">Menu</p>
            </div>
            <div class="items">
                <span class="home">
                    <a href="{{route('home.homepage')}}">Home</a>
                </span>
                <h1 class="header">Thematic</h1>
                <ul class="nav-list">
                    @guest
                    @if(Route::has('register'))
                    <li class="register">
                        <a href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                    </li>
                    @endif
                    |
                    <li class="register">
                        <a href="{{route('register')}}">Sign up <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                    </li>
                    @else
                    <li class="logout">
                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout
                        </a>
                    </li>
                    <form method="POST" id="logout-form" action="{{route('logout')}}" style="display:none;">
                        @csrf
                    </form>
                    @endguest
                </ul>
            </div>
        </div>
        <div class="hero-bar">
            <ul class="hero-list">
                <li class="categ-hover"><a class="contact-page" href="{{route('category.index')}}">Categories</a><i class="fa fa-sort-desc desc" aria-hidden="true"></i></li>
                <li><a class="contact-page" href="{{route('post.index')}}">Blogs</a></li>
                <a class="contact-page" href="">Contact</a>
            </ul>
            @can('layout.app')
            <div class="add-post">
                <a href="{{route('post.create')}}">Add post</a>
            </div>
            @endcan
        </div>
        <div class="side-bar">
            <ul class="side-items">

                <a href="#">
                    Home
                </a>
                <a href="#">
                    About
                </a>
                <a href="#">
                    Categories
                </a>
                <a href="#">
                    Blogs
                </a>
                <a href="#">
                    Contact
                </a>
            </ul>
        </div>
    </nav>
    <!-- content -->

    <div class="content-section">
        @yield('content')
    </div>

    <!-- <footer class="footer-control"></footer> -->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>