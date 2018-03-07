@extends ('layouts.app')

@section('content')
  <table>
  @foreach ($permissions as $permission)
      <tr><td>{{ $permission->name }}</td></tr>
  @endforeach
  </table>
@endsection
