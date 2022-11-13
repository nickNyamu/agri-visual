@extends('master')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<div class="container box mt-2">
    <h4 style="text-align: center;">Population Report</h4><br>
    <div class="row">
        <ul class=" user nav ">
          <div class="col-sm-2">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.addPopulation')}}">Add Population</a>
          </li>
        </div>
        <div class="col-sm-2 ">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.viewPopulation') }}">View Population</a>
          </li>
        </div>
        </ul>
      </div>
    <div class="table-responsive">
<table id="example" class="table table-striped table-hover table-bordered">
            
    <thead>   
    <tr> 
                <th scope="col">Region</th>
                <th scope="col">Population</th>
                <th scope="col">Date</th>
                

              
            </tr>
        </thead>
        <tbody>
           
        </tbody>
        
    </table>
    </div>
</div>
@endsection

@section('javascripts')     
<script>
    $(document).ready( function(){
        $('#example').DataTable({
            language: {
                decimal: '.',
                thousands: ',',
                },

            processing:true,
            //serverSide:true,
            paging:true,
            orderClasses:false,
            dom:'Blfrtip',
            responsive:true,
            
            ajax:"{{ route('user.populationReport') }}",
            
            columns:[       
            {data: 'County'},
            {data: 'population'},
            {data: 'year'},
        ],
            
       
            buttons: [
                'pdf','excel','print'
            ],
           
    
            
        });
    });
</script>
@endsection