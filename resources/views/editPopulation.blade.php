@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-3">Edit Population</legend>
<ul class=" user nav mr-5">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.viewPopulation') }}">View Population</a>
    </li>
  </ul>
<div class="container-fluid justify-content-center d-flex pt-2">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0 shadow p-3">
           <div class="justify-content-center d-flex">
               <h3 class="sm-display-5">Edit Details</h3>
           </div>
            <form action="{{ route('user.updatePopulation') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $population ['id'] }} ">
                <div class="form-group ml-3 mr-3">
                        <label for="county" class="form-label">County</label>
                        <select class="form-select form-select-sm" name="region_id" id="county" value="{{ $population['region_id'] }}">
                        <option selected>{{ $county}}</option>
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->county }}</option>  
                            @endforeach
                        </select>
                        <span class="text-danger">@error('region_id'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="sCode" class="form-label">Population</label>
                    <input type="text" name="population" class="form-control" placeholder="1,000,000" value="{{ $population['population'] }}" >
                    <span class="text-danger">@error('population'){{ $message }}@enderror</span>
                </div>
                
                <div class="form-group ml-3 mr-3">    
                    <label for="sCode"  class="form-label">Date</label>
                    <input type="date" name="year" class="form-control" value="{{ $population['year'] }}> 
                    <span class="text-danger">@error('year'){{ $message }}@enderror</span>   
                </div>
                
                <div class="col-12 d-flex justify-content-center mb-4">
                   <button type="submit" class="btn btn-primary col-md-4">Edit Population</button>
               </div>
            </form>
        </div>
       </div>
</div>

@endsection

