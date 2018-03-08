@extends('layouts.app')

@section('title', 'Users & Permissions')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="userModal" tabindex="-1" user="dialog" aria-labelledby="userModalLabel">
    <div class="modal-dialog" user="document">
      {!! Form::open(['method' => 'post']) !!}

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="userModalLabel">User</h4>
        </div>
        <div class="modal-body">
          <!-- name Form Input -->
          <div class="form-group @if ($errors->has('name')) has-error @endif">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'User Name']) !!}
            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <!-- Submit Form Button -->
          {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <h3>Users</h3>
      <div class="alert-warning">
        Warning: Roles are not included -> existing roles will be removed!
      </div>
    </div>
    <div class="col-md-7 page-action text-right">
      @can('add_users')
        <a href="#" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#userModal"> <i class="glyphicon glyphicon-plus"></i> New</a>
      @endcan
    </div>
  </div>


  @forelse ($users as $user)
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.updatePermissions',  $user->id ], 'class' => 'm-b']) !!}

    @if($user->name === 'Admin')
      @include('shared._permissions', [
               'title' => $user->name .' Permissions',
               'options' => ['disabled'] ])
    @else
      @include('shared._permissions', [
               'title' => $user->name .' Permissions',
               'model' => $user ])
      @can('edit_users')
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
      @endcan
    @endif

    {!! Form::close() !!}

  @empty
    <p>No Users defined, please run <code>php artisan db:seed</code> to seed some dummy data.</p>
  @endforelse
@endsection
