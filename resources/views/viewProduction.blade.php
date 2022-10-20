@extends('master')

@section('content')
 <div>
    <legend class="fs-2 ml-4 mt-3">Production</legend>
    <ul class=" user nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.addProduction')}}">Add Production</a>
      </li>
    </ul>
    <table class="table table-head-fixed text-nowrap mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">produce</th>
            <th scope="col">Region</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($productions as $production)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $production->Produce }}</td>
                    <td>{{ $production->Region }}</td>
                    <td>{{ $production->quantity }}{{ $production ->units }}</td>
                    <td>{{ $production->year }}</td>
                    <td>
                      <a href="{{ url('deleteProduction',$production->id) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                  </td>
                </tr>
            </tbody>
        @endforeach
      </table>
 </div>
@endsection