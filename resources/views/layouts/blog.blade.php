@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 mb-4 display-3">
        <a class="text-dark" href="/{{ $blog->title }}/posts">{{ $blog->title }}</a>
        {{-- @if(Auth::user())
            @if(Auth::user()->can('add_posts') && Auth::user()->id == $blog->user_id)
                <a class="material-icons text-success" style="font-size:2rem" href="/{{ $blog->title }}/posts/create" title="New Post">note_add</a>
            @endif
        @endif --}}
    </h1>
    <div class="row">
        <div class="col-auto-md">
            <nav class="nav flex-column">

                @include ('posts.search')
                <span class="px-3 py-2 lead">Categories</span>
                <a href="/{{  $blog->title  }}/posts/json" id="ALL" class="nav-link category-link">All</a>

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
