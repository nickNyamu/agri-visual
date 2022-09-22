@extends('master')

@section('content')
 <div>
    <legend class="fs-2 ml-4 mt-3">Users</legend>
    <ul class=" user nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.addproduce')}}">Add Produce</a>
      </li>
    </ul>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Produce Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($produces as $produce)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $produce->name }}</td>
                    <td>{{ $produce->description }}</td>
                    <td>{{ $produce->category }}</td>
                    <td>
                        <a href="{{ "editProduce/".$produce['id'] }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ "deleteProduce/".$produce['id'] }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
      </table>
 </div>
@endsection