@extends ('layouts.app')

@section('content')
  <table class="table">
  <tr>
    <th>Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($posts as $post)
    <tr>
      <td>
        <a href="/{{ $post->title }}">{{ $post->title }}</a>
      </td>
      <td>
        <a class="material-icons" href="/posts/{{ $post->id }}/edit">edit</a>
      </td>
      <td>
        <form class="form-inline" action="/posts/{{ $post->id }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input class="material-icons"
                  type="submit" value="delete"
                 style="border:none; background:none; cursor:pointer; color:red">
        </form>
      </td>
    </tr>
  @endforeach
  </table>
@endsection
