@extends('master')

@section('content')
  <h1 class="text-center mt-5 mb-4">Gorilla Blog</h1>
  <div class="row">
    <div class="col-auto-md">
      <a id="ALL" class="nav-link category-menu my-1 active">All</a>

      @yield ('categories_menu')

    </div>
    <div class="col" id="posts">

      @yield ('blog_posts')

    </div>
  </div>
@endsection
