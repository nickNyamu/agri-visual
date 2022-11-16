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
            <a class="nav-link active" href=" ">2019</a>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a class="nav-link" href=" ">2020</a>
          </li>
        </div>
        <div>
            <li class="nav-item">
              <a class="nav-link" href=" ">2021</a>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a class="nav-link" href=" ">2022</a>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a class="nav-link" href=" ">View Production</a>
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
                    <th>Year</th>
                    <th>Actual Production(Kgs)</th>
                    <th>Required Production(Kg)</th>
                    <th>Difference</th>
                </tr>
            </thead>

            <tbody> 
                <td>1</td>   
                <td>ggg</td>
                <td>2019</td>
                <td>452224</td>
                <td>4646464</td>
                <td>575</td>
            </tbody>
            
        </table>
        </div>
    </div>
    </div>  
</div>
@endsection