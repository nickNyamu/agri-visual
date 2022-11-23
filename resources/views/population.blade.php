@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-3">Add Population</legend>
<ul class=" user nav mr-5">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.viewPopulation') }}">View Population</a>
    </li>
  </ul>
<div class="container-fluid justify-content-center d-flex pt-2">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0 shadow p-3">
           <div class="justify-content-center d-flex">
               <h3 class="sm-display-5">Add Details</h3>
           </div>
            <form action="{{ route('user.createPopulation') }}" method="POST">
                @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ Session::get('success') }}
                </div>  
                @endif
                @if (Session::get('fail'))
                <div class="alert alert-fail">
                    {{ Session::get('fail') }}
                </div>  
                @endif
                @csrf
                <div class="form-group ml-3 mr-3">
                        <label for="county" class="form-label">County</label>
                        <select class="form-select form-select-sm" name="region_id" id="county" value="{{ old ('region_id')}}">
                            <option selected>--Choose Region--</option>
                            @foreach ($regions as $region)
                                
                                <option value="{{ $region->id }}">{{ $region->county }}</option>  
                            @endforeach
                        </select>
                        <span class="text-danger">@error('region_id'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="sCode" class="form-label">Population</label>
                    <input type="text" name="population" class="form-control" placeholder="1,000,000" value="{{ old ('population')}}" >
                    <span class="text-danger">@error('population'){{ $message }}@enderror</span>
                </div>
                
                <div class="form-group ml-3 mr-3">    
                    <label for="sCode"  class="form-label">Date</label>
                    <input type="date" name="year" class="form-control" value="{{ old ('year')}}"> 
                    <span class="text-danger">@error('year'){{ $message }}@enderror</span>   
                </div>
                
                <div class="col-12 d-flex justify-content-center mb-4">
                   <button type="submit" class="btn btn-primary col-md-4">Add Population</button>
               </div>
            </form>
        </div>
       </div>
</div>

@endsection


