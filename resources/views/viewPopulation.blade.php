@extends('master')

@section('content')
 <div>
    <legend class="fs-2 ml-4 mt-3">Population</legend>
    <ul class=" user nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.addregion')}}">Add Region</a>
      </li>
    </ul>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Region</th>
            <th scope="col">Population</th>
            <th scope="col">Year</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($regions as $region)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $region->county }}</td>
                    <td>{{ $region->area }}</td>
                    <td>
                        <a href=" " class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href=" " class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
      </table>
 </div>
@endsection