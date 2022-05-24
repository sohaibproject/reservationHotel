@extends('layouts.admin')

@section('contenu')


  @include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
   <div class="container-fluid ">
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2 m-2">Reservation</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="{{route('reservation.create')}}" class="btn btn-sm btn-outline-secondary">+new</a>
          </div>
        </div>
    </div>

    <div  class="container-fluid">
      <form method="get">
        <div class="search-form">
          <div class="row">

            <div class="col-3">
              <input type="text" class="form-control" name="q" placeholder="search...">
            </div>
    
            <div class="col-2">
              <button type="submit" class="btn btn-primary btn-sm">apply-filter</button>
            </div>
          </div>
          <input type="hidden" name="o" value="">
        </div>
      </form>
    </div>
  

    <div class="table-responsive mt-2">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
             
              <th>name</th>
              <th>email</th>
              <th>phone</th>
              <th>room</th>
              <th>nbr places</th>
              <th>total</th>
              <th>note</th>
              <th>check In </th>
              <th>check Out</th>
              
             <th>Add</th>
              <th>Update</th>
            
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
          
            @if($reservations)
            @foreach ($reservations as $res)
              
                <tr>
                    <td>{{$res->id}}</td>
                
                    <td>{{$res->name}}</td>
                    
                    <td>{{$res->email}}</td>
                      <td>{{$res->phone}}</td>
                      <td>{{$res->reservation_rooms->name}}</td>
                   <td>{{$res->reservation_rooms->nbr_place}}</td>
                   <td>{{$res->reservation_rooms->price}}</td>
                   <td>{{$res->notes}}</td>
                    
                    <td>{{$res->CheckIn_date}}</td>
                      <td>{{$res->CheckOut_date}}</td>
                  
                  
                  
                    <td>{{$res->created_at->format('d.m.y')}}</td>
                    <td>{{$res->updated_at->format('d.m.y')}}</td>
                    <td>
                      <a href="{{ route('reservation.edit',$res->id) }} " class="btn btn-warning btn-sm">edite</a>
                      <a href="{{ route('reservation.delete',$res->id) }} " onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-sm">delete</a>
                    </td>
                  </tr>
                    
                
            @endforeach
                
     
             
               
           
             
              @endif
           
          </tbody>
         

        </table>
        @if(count($reservations) == 0)
          <p>not-found</p>
          <a name="" id="" class="btn btn-success btn-sm" href="{{route('reservation.create')}}" role="button">+new</a>
          @endif
      </div>  
    </div> 
    {{-- {{ $tours->links() }} --}}
    
@endsection