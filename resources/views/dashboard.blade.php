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
      <div class="col-lg-6">
         <div class="card">
            <div class="card-header border-0">
            <h2 class="card-title">Chart</h2>

            </div>
         </div>
      </div>
   </div>
@endsection