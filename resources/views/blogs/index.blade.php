@extends ('layouts.app')

@section('content')
  <table class="table">
  <tr>
    <th>Name</th>
    <th>Title</th>
    <th>Blogger</th>
    <th>Email</th>
    @can('edit_blogs')
        <th>Edit</th>
    @endcan
    @can('delete_blogs')
        <th>Delete</th>
    @endcan
  </tr>
  @foreach ($blogs as $blog)
    <tr>
      <td>
        <a href="/{{ $blog->name }}">{{ $blog->name }}</a>
      </td>
      <td>{{ $blog->title }}</td>
      <td>{{ $blog->user()->name }}</td>
      <td>{{ $blog->user()->email }}</td>
      @if(Auth::user())
          @if(Auth::user()->can('edit_blogs') && Auth::user()->id == $blog->user_id)
            <td>
              <a class="material-icons" href="/blogs/{{ $blog->title }}/edit">edit</a>
            </td>
          @endif
      @endif
      @if(Auth::user())
          @if(Auth::user()->can('delete_blogs') && Auth::user()->id == $blog->user_id)
            <td>
              <form class="form-inline" action="/blogs/{{ $blog->title }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input class="material-icons"
                        type="submit" value="delete"
                       style="border:none; background:none; cursor:pointer; color:red">
              </form>
            </td>
          @endif
      @endif
    </tr>
  @endforeach
  </table>

  <a href="/{{ $blog->name }}/posts/create" title="New Post">
  <span class="material-icons">note_add</span>
  Create new blog
  </a>

@endsection
