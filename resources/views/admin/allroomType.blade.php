@extends('layouts.admin')

@section('contenu')


  @include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
   <div class="container-fluid ">
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2 m-2">Room Type</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="btn-group mr-2">
        <a href="{{route('roomType.create')}}" class="btn btn-sm btn-outline-secondary">+new</a>
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
                
                <th>Name</th>
              
                <th>Add</th>
                <th>Update</th>
              
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @if($roomTypes)
                @foreach ($roomTypes as $type)
                  <tr>
                    <td>{{$type->id}}</td>
                
                    
                    <td>{{$type->name}}</td>
                    
                      
                     
                     
                   <td>{{$type->created_at->format('d.m.y')}}</td>
                    <td>{{$type->updated_at->format('d.m.y')}}</td>
                    <td>
                     
                      <a href="{{ route('roomType.edit',$type->id) }} " class="btn btn-warning btn-sm">edite</a>
                      <a href="{{ route('roomType.delete',$type->id) }} " onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-sm">delete</a>
                    </td>
                  </tr>
                @endforeach
                @endif
             
            </tbody>
  
          </table>
  
          @if(count($roomTypes) == 0)
          <p>not-found</p>
          <a name="" id="" class="btn btn-success btn-sm" href="{{route('roomType.create')}}" role="button">+new</a>
          @endif
        </div>  
      </div> 
      
  @endsection




   