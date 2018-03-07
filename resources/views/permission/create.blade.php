@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-4">New Permission</h1>

    <form method="post" action="/permissions" class="mb-3" >
        {{ csrf_field() }}

        @include('layouts.errors')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" placeholder="Enter the name here" name="name">
        </div>

        <input class="btn" type="submit" value="Submit new permission">
    </form>
@endsection
