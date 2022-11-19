@extends('master')

@section('content')
<div class="containerr">
    <div class="mt-3 ml-3">
        <h4>Detailed Production Quantity</h4>
    </div>
    <div>      
        <ul class="user nav ml-3">
          <div>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.viewProduction') }}">View Production</a>
            </li>
          </div>
        </ul>
    </div>



<div class="row"> 
    <div class="col-12 mt-3">
        <div  class="card-body table-responsive " style="height: 580px;">
            <table class="table table-head-fixed text-nowrap"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produce</th>
                    <th>Action</th>
                </tr>
            </thead>
  @foreach ($produces as $produce)
            <tbody> 
                <td>{{ ++$i }}</td>
                <td>{{ $produce->name }}</td>   
                
                  
                <td><a href="{{ "detailedProduction/".$produce['id'] }}" class="btn btn-warning"><i class="fa fa-pencil">View Detailed Data</i></a></td>
                    
            </tbody>
  @endforeach
        </table>
        </div>
    </div>
    </div>  
</div>
@endsection