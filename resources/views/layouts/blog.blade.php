@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 mb-4 display-3">
        <a class="text-dark" href="/{{ $blog->name }}/posts">{{ $blog->title }}</a>
    </h1>
    <div class="row">
        <div class="col-auto-md">
            <nav class="nav flex-column">
                @include ('posts.search')
                <span class="px-3 py-2 lead">Categories</span>
                <a href="/{{  $blog->name  }}/posts/json" id="ALL" class="nav-link category-link">All</a>

                @include ('category.index')
                <span class="px-3 py-2 lead">Archives</span>
                @include('posts.archives')
                @include('blogs.subscribe')
            </nav>
        </div>

        <div class="col" id="posts">

            @yield ('blog_subscribe')
            @yield ('blog_posts')

        </div>
    </div>
@endsection
