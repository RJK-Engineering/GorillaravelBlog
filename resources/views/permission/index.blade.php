@extends ('layouts.app')

@section('content')
  <h1 class="text-center mt-5 mb-4">
    Permissions
    <a class="material-icons" href="/permissions/create" title="New Permission">note_add</a>
  </h1>

  <div class="alert-success">
    {{ Session::get('alert-success') }}
  </div>
  <div class="alert-error">
    {{ Session::get('alert-error') }}
  </div>

  <table class="table">
  <tr>
    <th>Name</th>
    <th>Delete</th>
  </tr>
  @foreach ($permissions as $permission)
    <tr>
      <td>{{ $permission->name }}</td>
      <td>
        <form class="form-inline" action="/permissions/{{ $permission->id }}" method="POST">
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
