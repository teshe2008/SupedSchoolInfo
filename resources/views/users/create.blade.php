@extends('layouts.app')


@section('content')

<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create New User</h1>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-primary float-right" href="{{ route('users.index') }}"> Back</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>



@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="card card-primary">
    <!--   <!-- general form elements -->
    <div class="col-md-7">
      <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">User Registration</h3>
          </div>
        <form role="form">
          <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
              {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
              </div>
              <div class="form-group">
                <label>Role</label>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
              </div>
            </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        {!! Form::close() !!}
      </div>
</div>

@endsection
