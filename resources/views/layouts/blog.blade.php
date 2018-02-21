@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 mb-4">GorillaBlog</h1>
    <div class="row">
        <div class="col-auto-md">
            <nav class="nav flex-column">

                @include ('posts.search')
                <span class="px-3 py-2"><u>Categories</u></span>
                <a href="/" id="ALL" class="nav-link category-menu">All</a>

                @include ('category.index')
                <span class="px-3 py-2"><u>Archives</u></span>
                @include('posts.archives')
            </nav>
        </div>

        <div class="col" id="posts">

            @yield ('blog_posts')

        </div>
    </div>
@endsection
