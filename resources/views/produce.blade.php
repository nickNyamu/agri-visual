@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-3">Add Produce</legend>

    <ul class=" user nav mr-5">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.viewProduce') }}">View Produce</a>
        </li>
      </ul>
<div class="container-fluid justify-content-center d-flex pt-2">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0 shadow p-3">
           <div class="justify-content-center d-flex">
               <h3 class="sm-display-5">Produce Details</h3>
           </div>
            <form action="{{ route('user.createProduce') }}" method="POST">
                @csrf
                <div class="form-group ml-3 mr-3">
                    <label for="produceName" class="form-label">Produce Name</label>
                    <input type="text" name="name" class="form-control" placeholder="e.g Millet" value="{{ old ('name')}}">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="lorem ipsum..." value="{{ old ('description')}}">
                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3 mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select form-select-sm" name="category" id="category">  
                    <option value="Crop">Crop</option>
                    <option value="Livestock">Livestock</option>
                    </select>
                </div>
            </fieldset>
                <div class="col-12 d-flex justify-content-center mb-3">
                   <button type="submit" class="btn btn-primary col-md-3">Add Produce</button>
               </div>
            </form>
        </div>
       </div>
</div>
@endsection