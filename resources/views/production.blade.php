@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-1">Production</legend>

    <ul class=" user nav mr-5">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.viewProduction') }}">View Production</a>
        </li>
      </ul>
<div class="container-fluid justify-content-center d-flex pt-1">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0 shadow p-3">
           <div class="justify-content-center d-flex">
               <h3 class="sm-display-5">Production Details</h3>
           </div>
            <form action="" method="POST">
                @csrf
                <div class="form-group ml-3 mr-3">
                    <label for="produceName" class="form-label">Produce ID</label>
                    <input type="text" name="produce" class="form-control" placeholder="e.g Millet" value="{{ old ('produce')}}">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="description" class="form-label">Region ID</label>
                        <select class="form-select form-select-sm" name="region_id" id="county" value="{{ old ('region_id')}}">
                            <option selected>--Choose Region--</option>
                            @foreach ($regions as $region)
                                
                                <option value="{{ $region->id }}">{{ $region->county }}</option>  
                            @endforeach
                        </select>
                        <span class="text-danger">@error('region_id'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="description" class="form-label">Quantity</label>
                    <input type="text" name="description" class="form-control" placeholder="lorem ipsum..." value="{{ old ('description')}}">
                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3 mb-3">
                    <label for="units" class="form-label">Units</label>
                    <select class="form-select form-select-sm" name="units" id="category">  
                        <option value="kg">kg</option>
                        </select>
                    </div>
                <div class="form-group ml-3 mr-3">    
                    <label for="sCode"  class="form-label">Date</label>
                    <input type="date" name="year" class="form-control" value="{{ old ('year')}}"> 
                    <span class="text-danger">@error('year'){{ $message }}@enderror</span>   
                </div>
            </fieldset>
                <div class="col-12 d-flex justify-content-center mb-3">
                   <button type="submit" class="btn btn-primary col-md-3">Add Production</button>
               </div>
            </form>
        </div>
       </div>
</div>
@endsection