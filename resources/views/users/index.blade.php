@extends('layouts.app')



@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users Management</h1>
        </div>
        <div class="col-sm-6">
            @can('user-create')
            <a class="btn btn-success float-right" href="{{ route('users.create') }}"> Create New User</a>
            @endcan
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Users List</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $user)

            <tr>

              <td>{{ ++$i }}</td>

              <td>{{ $user->name }}</td>

              <td>{{ $user->email }}</td>

              <td>

                @if(!empty($user->getRoleNames()))

                  @foreach($user->getRoleNames() as $v)

                     <label class="badge badge-success">{{ $v }}</label>

                  @endforeach

                @endif

              </td>

              <td>
                  @can('user-list')
                      <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                  @endcan

                  @can('user-edit')
                      <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                  @endcan

                  @can('user-delete')
                       {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                     {!! Form::close() !!}
                  @endcan
              </td>

            </tr>

           @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div> --}}
  </div>


@if ($message = Session::get('success'))

<div class="alert alert-success">

  <p>{{ $message }}</p>

</div>

@endif


{!! $data->render() !!}



{{-- <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> --}}

@endsection
