@extends('master')

@section('content')

 <h4 class="pt-2">Welcome, {{ Auth::user()->Fname }} {{ Auth::user()->Lname }} </h4>

   @if (Auth::user()->role == 'Manager')
      <p>this is managers text</p>
      
   @endif


   @if (Auth::user()->role == 'Admin')
   <div class="main">

      <h5>Dashboard</h5>
      <div class="cardviews">
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>8,267</h3>
                     <span>Total Users</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>8,267</h3>
                     <span>Total Produce</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>8,267</h3>
                     <span>New Users</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>8,267</h3>
                     <span>New Users</span>
                  </div>
            </div>
      </div>
   </div>
   
   @endif
   <div class="row">
      <div class="col-lg-6 mb-4">
         <div class="card">
            <div class="card-header border-0">
               <h5 class="card-title">Population Chart</h5>

               <div class="card-body">
                  <div class="position-relative" id="barChart">
                     {!! $chart->container() !!}
                     {!! $chart->script() !!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   

      <div class="col-lg-6">
          <div class="card mt-5">
          <table class="table table-head-fixed text-nowrap">
              <thead>
                  <tr>
                      <th>Year</th>
                      <th>Required Production</th>
                      <th>Actual Production</th>
                      <th>Surplus/Deficit</th>
                  </tr>
              </thead>
              <tbody>
                  <td>2019</td>
                  <td>111111</td>
                  <td>2222222</td>
                  <td>4500</td>
              </tbody>
              <tbody>
                  <td>2020</td>
                  <td>111111</td>
                  <td>2222222</td>
                  <td>-45778</td>
              </tbody>
              <tbody>
                  <td>2021</td>
                  <td>111111</td>
                  <td>2222222</td>
                  <td>36755</td>
              </tbody>
              <tbody>
                  <td>2022</td>
                  <td>111111</td>
                  <td>2222222</td>
                  <td>22522</td>
              </tbody>
          </table>
          </div>
  </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endsection