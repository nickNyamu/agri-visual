@extends('master')

@section('content')

 <h4 class="pt-2">Welcome, {{ Auth::user()->Fname }} {{ Auth::user()->Lname }} </h4>

   @if (Auth::user()->role == 'Inactive')
   <h3 class="pt-4">You dont have the rights to use this system!!Please contact Admin.</h3>
   
   @endif
   @if (Auth::user()->role == 'Manager')
 <div class="main">

      <h5>Admin Dashboard</h5>
      <div class="cardviews">
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>{{ $users }}</h3>
                     <span>Total Users</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>{{ $produce }}</h3>
                     <span>Total Produce</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>{{ $county }}</h3>
                     <span>Counties</span>
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
  

   <div class="row">
      <div class="col-lg-6">
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
         <div class="card">
            <div class="card-header border-0">
               <h5 class="card-title">Total User Pie Chart</h5>

               <div class="card-body">
                  <div class="position-relative" id="pieChart">
                     {!! $chart2->container() !!}
                     {!! $chart2->script() !!}
                  </div>
               </div>
            </div>
         </div>
      </div>
  </div>
      
   @endif


   @if (Auth::user()->role == 'Admin')
   <div class="main">

      <h5>Admin Dashboard</h5>
      <div class="cardviews">
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>{{ $users }}</h3>
                     <span>Total Users</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>{{ $produce }}</h3>
                     <span>Total Produce</span>
                  </div>
            </div>
            <div class="val-box shadow p-3">
               <i class="fas fa-users"></i>
                  <div>
                     <h3>{{ $county }}</h3>
                     <span>Counties</span>
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
   
   
   <div class="row">
      <div class="col-lg-6">
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
         <div class="card">
            <div class="card-header border-0">
               <h5 class="card-title">Total User Pie Chart</h5>

               <div class="card-body">
                  <div class="position-relative" id="pieChart">
                     {!! $chart2->container() !!}
                     {!! $chart2->script() !!}
                  </div>
               </div>
            </div>
         </div>
      </div>
  </div>
  @endif
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endsection