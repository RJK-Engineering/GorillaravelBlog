@extends('layouts.app')

@section('content')
  <h1 class="mt-5 mb-4">New Blog</h1>
  <form method="post" enctype="multipart/form-data" action="/blogs" class="mb-5" >
    {{ csrf_field() }}

    @include('layouts.errors')

    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" id="title" name="title" placeholder="Enter the title here" onchange="setName()">
      <label for="name">Name</label>
      <input class="form-control" id="name" name="name" placeholder="This name will be used in the url for the blog">
    </div>
    <hr>

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="submit" value="Create Blog" class="btn"></input>
  </form>
@endsection

@section('script')
<script type="text/javascript">
function setName() {
    $('#name').val($('#title').val().replace(/ /g, '').toLowerCase());
}
</script>
@endsection
