@extends('layouts.app')

@section('content')
  <h1 class="mt-5 mb-4">Edit Blog</h1>
  <form class="mb-5" action="/blogs/{{ $blog->name }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    @include('layouts.errors')

    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" id="title" name="title" value="{{ $blog->title }}">
      <label for="name">Name</label>
      <input class="form-control" id="name" name="name" value="{{ $blog->name }}">
    </div>
    <hr>

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="submit" value="Update Blog" class="btn"></input>
  </form>
@endsection
