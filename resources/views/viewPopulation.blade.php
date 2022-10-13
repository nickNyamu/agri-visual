@extends('master')

@section('content')
 <div>
    <legend class="fs-2 ml-4 mt-3">Population</legend>
    <ul class=" user nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.addPopulation')}}">Add Population</a>
      </li>
    </ul>
    <table class="table table-head-fixed text-nowrap mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Region</th>
            <th scope="col">Population</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($populations as $population)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $population->County }}</td>
                    <td>{{ $population->population }}</td>
                    <td>{{ $population->year }}</td>
                    <td>
                      <a href="{{ "editPopulation/".$population['id'] }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                      <a href="{{ "deletePopulation/".$population['id'] }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                  </td>
                </tr>
            </tbody>
        @endforeach
      </table>
 </div>
@endsection