@extends ('layouts.app')

@section('content')
  <table class="table">
    <tr>
      <th>Blogger</th>
      <td>{{ $blog->user()->name }}</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>{{ $blog->user()->email }}</td>
    </tr>
    <tr>
      <th>Title</th>
      <td>{{ $blog->title }}</td>
    </tr>
  </table>
  <a href="/blogs">
    <span class="material-icons">keyboard_return</span>
    Back To Index
  </a>
@endsection

