@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-4">New Permission</h1>

    <form class="mb-3" method="post" action="/permissions">
        {{ csrf_field() }}

        @include('layouts.errors')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" placeholder="Enter the name here" name="name">
        </div>

        <input class="btn" type="submit" value="Add new permission">
    </form>
@endsection
