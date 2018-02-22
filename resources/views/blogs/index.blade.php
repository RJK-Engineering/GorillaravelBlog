@extends ('layouts.app')

@section('content')
  <table class="table">
  <tr>
    <th>Blogger</th>
    <th>Email</th>
    <th>Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($blogs as $blog)
    <tr>
      <td>{{ $blog->user()->name }}</td>
      <td>{{ $blog->user()->email }}</td>
      <td>{{ $blog->title }}</td>
      <td>
        <a class="material-icons" href="/blogs/{{ $blog->id }}/edit">edit</a>
      </td>
      <td>
        <form class="form-inline" action="/blogs/{{ $blog->id }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input class="material-icons"
                  type="submit" value="delete"
                 style="border:none; background:none; cursor:pointer;">
        </form>
      </td>
    </tr>
  @endforeach
  </table>
@endsection
