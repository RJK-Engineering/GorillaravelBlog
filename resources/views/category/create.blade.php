@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-4">New Category</h1>

    <form class="mb-5" method="post" action="/categories">
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
