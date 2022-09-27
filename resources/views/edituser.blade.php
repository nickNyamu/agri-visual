@extends('master')

@section('content')
<legend class="fs-2 ml-4 mt-3">Edit User</legend>

    <ul class=" user nav mr-5">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.adduser')}}">Add User</a>
        </li>
      <!-- <li class="nav-item">
          <a class="nav-link" href="#">View Managers</a>
        </li>
    -->
      </ul>
<div class="container-fluid  mt-2">
    <div class="card px-0 pb-0 shadow p-3">
       <div class="border-bottom mb-2 d-flex justify-content-center">
           <h3>User Details</h3>
       </div>
       <form action="{{ route('user.updateuser') }}" method="POST">
            @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>  
            @endif
            @if (Session::get('fail'))
            <div class="alert alert-fail">
                {{ Session::get('fail') }}
            </div>  
            @endif
           @csrf 
           <input type="hidden" name="id" value="{{ $user['id'] }}">
               <fieldset class="row g-6 ml-4 mr-4">

                   <div class="col-md-6">
                       <label for="firstName" class="form-label">First Name</label>
                       <input type="text" name="fname" id="firstName" placeholder="First Name" class="form-control" value="{{ $user['Fname'] }}">
                       <span class="text-danger">@error('fname'){{ $message }}@enderror</span>
                   </div>

                   <div class="col-md-6">
                       <label for="lastName" class="form-label">Last Name</label>
                       <input type="text" name="lname" id="lastName" placeholder="Last Name" class="form-control" value="{{ $user['Lname'] }}">
                       <span class="text-danger">@error('lname'){{ $message }}@enderror</span>
                   </div>
   
                   <div class="col-md-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ $user['email'] }}">
                       <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                   </div>
   
                   <div class="col-md-6">
                       <label for="nationalID" class="form-label">National ID</label>
                       <input type="text" name="nationalID" id="nationalID" placeholder="National ID" class="form-control" value="{{ $user['nationalID'] }}">
                       <span class="text-danger">@error('nationalID'){{ $message }}@enderror</span>
                   </div>
   
                   <div class="col-md-6">
                       <label for="phone" class="form-label">Phone No.</label>
                       <input type="text" name="phone" id="phone" placeholder="071234567" class="form-control" value="{{ $user['county'] }}">
                       <span class="text-danger">@error('telNo'){{ $message }}@enderror</span>
                   </div>
   
                   <div class=" col-md-6">
                       <label for="county" class="form-label">County</label>
                       <input type="text" name="county" id="county" placeholder="Bomet" class="form-control" value="{{ $user['phone'] }}">
                       <span class="text-danger">@error('county'){{ $message }}@enderror</span>
                   </div>   

                   <div class="col-md-6">
                       <label for="role" class="form-label">Role</label>
                   <select class="form-select form-select-sm" name="role">
                       <option selected>{{ $user['role'] }}</option>
                       <option>Admin</option>
                       <option>Manager</option>
                       </select>
                       <span class="text-danger">@error('role'){{ $message }}@enderror</span>
                   </div>
               </fieldset>
   
                   <div class="col-12 d-flex justify-content-center mt-4 mb-4">
                       <button type="submit" class="btn btn-primary col-md-3">Edit User</button>
                   </div>
       </form>
  
    </div>        
</div>
@endsection