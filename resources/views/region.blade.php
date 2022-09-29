@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-3">Add Region</legend>
<ul class=" user nav mr-5">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.viewRegion') }}">View Regions</a>
    </li>
  </ul>
<div class="container-fluid justify-content-center d-flex pt-2">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0 shadow p-3">
           <div class="justify-content-center d-flex">
               <h3 class="sm-display-5">Add Details</h3>
           </div>
            <form action="{{ route('user.createRegion') }}" method="POST">
                @csrf
                <div class="form-group ml-3 mr-3">
                    <label for="county" class="form-label">County</label>
                    <input type="text" name="county" class="form-control" value="{{ old ('county')}}">
                    <span class="text-danger">@error('county'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" name="area" class="form-control" value="{{ old ('area')}}">
                    <span class="text-danger">@error('area'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3 mb-3">
                    <label for="units" class="form-label">Units</label>
                    <select class="form-select form-select-sm" name="units" id="category">  
                        <option value="km2">km2</option>
                        </select>
                    </div>

                <div class="col-12 d-flex justify-content-center mb-4">
                   <button type="submit" class="btn btn-primary col-md-3">Add Region</button>
               </div>
            </form>
        </div>
       </div>
</div>

@endsection