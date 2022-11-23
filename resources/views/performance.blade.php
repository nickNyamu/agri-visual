@extends('master')

@section('content')
<div class="containerr">
    <div class="mt-3 ml-3">
        <h4>Required Produce Quantity</h4>
    </div>
    <div>      
        <ul class="user nav ml-3">
          <div>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('user.performance') }}"><u>2019</u></a>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.performance1') }}">2020</a>
          </li>
        </div>
        <div>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.performance2') }}">2021</a>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.performance3') }}">2022</a>
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
                    <th>Population(People)</th>
                    <th>Required Quantity(kg/Day)</th>
                    <th>Required Quantity(kg/Year)</th>
                </tr>
            </thead>
            @foreach ($produces as $produce)
            <tbody> 
                <td>{{ ++$i }}</td>   
                <td>{{ $produce->name }}</td>
                <td>2019</td>
                <td>{{  number_format(floatval($year1Sum)) }}</td>
                <td>{{  number_format(floatval($produce->description *  $year1Sum)) }}</td>
                <td>{{  number_format(floatval($produce->description *  $year1Sum  * 130))  }}</td>
            </tbody>
            @endforeach 
        </table>
        </div>
    </div>
    </div>  
</div>
@endsection