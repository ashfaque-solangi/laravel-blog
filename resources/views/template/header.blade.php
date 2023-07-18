<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
        <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="{{ asset('blog/css/bootstrap.min.css') }}">
        <!-- Bootstrap style -->
        <link rel="stylesheet" href="{{ asset('blog/css/templatemo-style.css') }}">

        <!-- Styles -->
        <style>
        </style>
    </head>
<body>
    <div class="tm-header">
        <div class="container-fluid">
            <div class="tm-header-inner">
                <a href="../home" class="navbar-brand tm-site-name">Classic</a>
                
                <!-- navbar -->
                <nav class="navbar tm-main-nav">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    
                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('post.index')}}" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link">Contact</a>
                            </li>
                        </ul>                        
                    </div>
                    
                </nav>  

            </div>                                  
        </div>            
    </div>