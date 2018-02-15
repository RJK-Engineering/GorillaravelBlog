@extends('master')

@section('content')

    <h1 class="mt-5 mb-4">New Category</h1>
    <form method="post" action="/category" class="mb-5" >

        {{ csrf_field() }}

        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input required class="form-control" id="exampleFormControlInput1" placeholder="Enter category name here" name="title">
        </div>

        <input type="submit" value="Submit" class="btn"></input>
    </form>

@endsection
