@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Add a rule for text expansion</h1>
        <form action="/snippets/create" method="post" enctype="multipart/form-data" class="mb-3">

            {{ csrf_field() }}

          <div class="form-group-row mb-4">
            <label for="key" class="sr-only">Enter abbreviation</label>
            <input required type="text" class="form-control" id="key" name="abbreviation" placeholder="Enter your abbreviation here">
          </div>
          <div class="form-group">
            <label for="text-area" class="sr-only">Enter the snippet you want to abbreviate</label>
            <textarea required class="form-control" id="text-area" rows="10" placeholder="Enter the snippet you want to abbreviate here" name="snippet"></textarea>
          </div>
          <input type="submit" value="Add new rule" class="btn mb-2"></input>
        </form>
    </div>
    <div class="pl-3">
        @include('textExpander.index')
    </div>
@endsection
