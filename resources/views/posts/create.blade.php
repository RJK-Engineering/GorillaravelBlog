@extends('master')

@section('content')
  <h1 class="mt-5 mb-4">New blog post</h1>
  <form method="post" action="/posts" class="mb-5" >

    {{ csrf_field() }}

  <div class="form-group">
    <label for="categoriesSelector">Select a category. Select multiple categories by holding the ctrl key and clicking.</label>
    <select required class="form-control" id="categoriesSelector" name="category">
      <option value="1">Uncategorizable</option>

      @yield('categories')

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input required class="form-control" id="exampleFormControlInput1" placeholder="Enter the title here" name="title">
  </div>
  <div class="form-group">
    <label for="text-area">Write your blog post here</label>
    <textarea required class="form-control" id="text-area" rows="10" placeholder="Enter the blogpost here" name="body"></textarea>
  </div>
  <input type="submit" value="Submit blog post" class="btn"></input>
</form>
@endsection
