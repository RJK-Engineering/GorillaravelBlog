@extends('layouts.app')

@section('content')
  <h1 class="mt-5 mb-4">New Blog</h1>
  <form method="post" enctype="multipart/form-data" action="/blogs" class="mb-5" >
    {{ csrf_field() }}

    @include('layouts.errors')

    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input class="form-control" id="exampleFormControlInput1" placeholder="Enter the title here" name="title">
    </div>
    <hr>

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="submit" value="Create Blog" class="btn"></input>
  </form>
@endsection
