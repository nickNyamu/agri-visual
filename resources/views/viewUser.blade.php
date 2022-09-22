@extends('master')

@section('content')
 <div>
    <legend class="fs-2 ml-4 mt-3">Users</legend>
    <ul class=" user nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.adduser')}}">Add User</a>
      </li>
    </ul>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">National ID</th>
            <th scope="col">County</th>
            <th scope="col">Phone</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($users as $user)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->Fname }} {{ $user->Lname}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->nationalID }}</td>
                    <td>{{ $user->county }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ "edituser/".$user['id'] }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ "deleteuser/".$user['id'] }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
      </table>
 </div>
@endsection