@extends('master')

@section('content')

    <h1 class="mt-5 mb-4">New Category</h1>
    <form class="form-inline" method="post" action="/category" class="mb-5" >

        {{ csrf_field() }}

        <div class="form-group">
            <label class="sr-only" for="exampleFormControlInput1">submit new category</label>
            <input required class="form-control" id="exampleFormControlInput1"
            placeholder="Enter category name here" name="title">
        </div>

        <input type="submit" value="add_circle_outline"
        class="material-icons ml-3" style="border: none; background:none; font-size: 36px">
        </input>
    </form>

@endsection
