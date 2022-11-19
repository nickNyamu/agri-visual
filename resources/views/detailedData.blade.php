@extends('master')

@section('content')

    <h4 class="ml-3 mt-3">Detailed Data for {{ $produce->name }}</h4>

    <div>      
        <ul class="user nav ml-3">
          <div>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.detailedProduction') }}">Back</a>
            </li>
          </div>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                       <h5 class="card-title">{{ $produce->name }} Production Quantity Chart</h5>
        
                       <div class="card-body">
                          <div class="position-relative" id="barChart">
                             {!! $chart3->container() !!}
                             {!! $chart3->script() !!}
                          </div>
                       </div>
                    </div>
                 </div>
            </div>

            <div class="col-lg-6">
            <div  class="card-body table-responsive " style="height: 580px;">
                <table class="table table-head-fixed text-nowrap"> 
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Produced Quantity(kgs)</th>
                        <th>Required Quantity(kgs)</th>
                        <th>Deficit/Surplus</th>
                    </tr>
                </thead>
                
                <tbody> 
                    <td>2022</td>
                    <td>{{  number_format(floatval($productions22)) }}</td>   
                    <td>{{ number_format(floatval($produce->description * $year4Sum)) }}</td>
                    <td>{{ number_format(floatval($productions22 -  $produce->description * $year4Sum)) }}</td>
                </tbody>
                <tbody> 
                    <td>2021</td>
                    <td>{{  number_format(floatval($productions21)) }}</td>   
                    <td>{{ number_format(floatval($produce->description * $year3Sum))}}</td>
                    <td>{{ number_format(floatval($productions21 -  $produce->description * $year3Sum))}}</td>
                </tbody>
                <tbody> 
                    <td>2020</td>
                    <td>{{  number_format(floatval($productions20)) }}</td>   
                    <td>{{ number_format(floatval($produce->description * $year2Sum))}}</td>
                    <td>{{ number_format(floatval($productions20 -  $produce->description * $year2Sum))}}</td>
                </tbody>
                <tbody> 
                    <td>2019</td>
                    <td>{{  number_format(floatval($productions19)) }}</td>   
                    <td>{{ number_format(floatval($produce->description * $year1Sum))}}</td>
                    <td>{{ number_format(floatval($productions19 -  $produce->description * $year1Sum))}}</td>
                </tbody>
            </table>
        </div>
    </div>
 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endsection