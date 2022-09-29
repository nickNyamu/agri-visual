@extends('master')

@section('content')
 <div class="vertical-scrollable">
    <legend class="fs-2 ml-4 mt-3">Regions</legend>
    <ul class=" user nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.addregion')}}">Add Region</a>
      </li>
    </ul>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">County</th>
            <th scope="col">Area</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($regions as $region)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $region->county }}</td>
                    <td>{{ $region->area}} {{ $region ->units }}</td>
                    <td>
                        <a href="{{ "editRegion/".$region['id'] }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ "deleteRegion/".$region['id'] }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
      </table>
 </div>
@endsection