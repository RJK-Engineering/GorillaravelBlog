@extends('layouts.app')

@section('content')
  <h1 class="mt-5 mb-4">Edit Blog</h1>
  <form method="post" enctype="multipart/form-data" action="/blogs/{{ $blog->id }}" class="mb-5" >
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    @include('layouts.errors')

    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input class="form-control" id="exampleFormControlInput1" value="{{ $blog->title }}" name="title">
    </div>
    <hr>

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="submit" value="Update Blog" class="btn"></input>
  </form>
@endsection
