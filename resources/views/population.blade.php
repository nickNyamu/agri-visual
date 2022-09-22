@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-3">Add Population</legend>
<ul class=" user nav mr-5">
    <li class="nav-item">
      <a class="nav-link" href="">View Population</a>
    </li>
  </ul>
<div class="container-fluid justify-content-center d-flex pt-2">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0 shadow p-3">
           <div class="justify-content-center d-flex">
               <h3 class="sm-display-5">Add Details</h3>
           </div>
            <form action="" method="POST">
                @csrf
                <div class="form-group ml-3 mr-3">
                        <label for="county" class="form-label">County</label>
                        <select class="form-select form-select-sm" name="county" id="county">
                            @foreach ($regions as $region)
                                <option value="{{ $region->county }}">{{ $region->county }}</option>  
                            @endforeach
                        </select>
                        <span class="text-danger">@error('role'){{ $message }}@enderror</span>
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="sCode" class="form-label">Population</label>
                    <input type="text" name="population" class="form-control" placeholder="1,000,000" >
                </div>
                <div class="form-group ml-3 mr-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control"  placeholder="YYYY" min="2010" max="2040">
                    <script>
                       document.querySelector("input[type=number]")
                       .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                    </script>
                </div>
                <div class="col-12 d-flex justify-content-center mb-4">
                   <button type="submit" class="btn btn-primary col-md-3">Add Population</button>
               </div>
            </form>
        </div>
       </div>
</div>

@endsection