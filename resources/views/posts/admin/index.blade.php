@extends ('layouts.app')

@section('content')
  <table class="table">
  <tr>
    <th>Name</th>
    <th>Title</th>
    <th>Comments</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($posts as $post)
    <tr>
      <td>
        <!-- <a href="/{{ $post->name }}">{{ $post->name }}</a> -->
        <a href="/{{ $post->title }}">TODO</a>
      </td>
      <td>
        {{ $post->title }}
      </td>
      <td>
        <form class="form-inline" action="/posts/{{ $post->id }}/toggleCommentStatus" method="POST">
          {{ csrf_field() }}
          <button class="btn ml-auto mr-auto mb-3" style="cursor: pointer">
            @if ($post->comments_on_off)
              <i class="material-icons">lock_outline</i>
            @else
              <i class="material-icons">lock_open</i>
            @endif
          </button>
        </form>
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
