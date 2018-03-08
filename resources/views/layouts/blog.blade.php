@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 mb-4">
        {{ $blog->title }}
        @if(Auth::user()->can('add_posts') && Auth::user()->id == $blog->user_id)
            <a class="material-icons" href="/{{ $blog->name }}/posts/create" title="New Post">note_add</a>
        @endif
    </h1>
    <div class="row">
        <div class="col-auto-md">
            <nav class="nav flex-column">

                @include ('posts.search')
                <span class="px-3 py-2"><u>Categories</u></span>
                <a href="/{{  $blog->title  }}/posts/json" id="ALL" class="nav-link category-link">All</a>

                @include ('category.index')
                <span class="px-3 py-2"><u>Archives</u></span>
                @include('posts.archives')
            </nav>
        </div>

        <div class="col" id="posts">

            @yield ('blog_subscribe')
            @yield ('blog_posts')

        </div>
    </div>
@endsection
