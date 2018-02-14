@extends('master')

@section('content')
    <form method="post" action="/comments" class="mb-5" >

      {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input required class="form-control" id="exampleFormControlInput1" placeholder="Enter the comment here" name="comment">
    </div>

  </form>

@endsection
