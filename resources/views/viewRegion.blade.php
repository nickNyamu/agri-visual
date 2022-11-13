@extends('master')

@section('content')
<div class="content-wrapper mb-2 mr-2">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6">
                  <h3>View Regions</h3>
                </div>
              </div>
            <div class="row">
              <ul class=" user nav mr-5">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.addregion')}}">Add Region</a>
                </li>
              </ul>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
              <!--<div class="card shadow p-2">
                <div class="card-header d-flex justify-content-between" style="height: 50px;">
                  <h3 class="card-title">Details</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>-->
                <!-- /.card-header -->
                <div class="card-body table-responsive " style="height: 570px;">
                  <table class="table table-head-fixed text-nowrap">
                     <thead>
                       <tr>
                         <th >#</th>
                         <th >County</th>
                         <th >Area</th>
                         <th >Action</th>
                       </tr>
                     </thead>
     
                      @foreach ($regions as $region)
                           <tbody>
                               <tr>
                                   <td>{{ ++$i }}</td>
                                   <td>{{ $region->county }}</td>
                                   <td>{{ number_format(floatval($region->area))}} {{ $region ->units }}</td>
                                   <td>
                                       <a href="{{ "editRegion/".$region['id'] }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                       <a href="{{ "deleteRegion/".$region['id'] }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>
                           </tbody>
                       @endforeach
                      </table>
                
               </div>
        </div>
    </div>
</div>

@endsection