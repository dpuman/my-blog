<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <a href="" class="navbar-brand">DIPANKAR BLOG</a>

        <ul class=" navbar-nav">
            <li><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
            @if(isset(Auth::user()->id))
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('category.create')}}" class="dropdown-item">Add Category</a></li>
                    <li><a href="{{route('category.index')}}" class="dropdown-item">Manage Category</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('blog.create')}}" class="dropdown-item">Add Blog</a></li>
                    <li><a href="{{route('blog.index')}}" class="dropdown-item">Manage Blog</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comments </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('comments')}}" class="dropdown-item">Manage Comments</a></li>

                </ul>
            </li>

            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}} </a>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item" onclick=" event.preventDefault();document.getElementById('logoutForm').submit();">Logout</a></li>
                    <form action="{{route('logout')}}" method="post" id="logoutForm">
                        @csrf
                    </form>
                </ul>
            </li>
            @else
                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
            @endif


        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/jquery.js"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

