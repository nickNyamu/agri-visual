@extends('master')

@section('content')
 <h1>Welcome, {{ Auth::user()->Fname }} {{ Auth::user()->Lname }} </h1>

   @if (Auth::user()->role == 'Manager')
      <p>this is managers text</p>
      
   @endif
   @if (Auth::user()->role == 'Admin')
   <p>this is admins text</p>
   
   @endif
@endsection