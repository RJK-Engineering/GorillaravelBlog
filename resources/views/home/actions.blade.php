@extends('layouts.app')
@section('content')
  <table>
  @foreach ($actions as $action)
    <tr>
      <td>{{ $action }}</td>
    </tr>
  @endforeach
  </table>
@endsection
