@extends('layouts.admin')

@section('contenu')


  @include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
   <div class="container-fluid ">
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2 m-2">Drivers</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="btn-group mr-2">
        <a href="{{route('driver.create')}}" class="btn btn-sm btn-outline-secondary">+new</a>
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
                <th>Status</th>
                <th>Name</th>
              
                
                <th>image</th>
                <th>willaya</th>
                <th>phone</th>
                <th>email</th>
               
                <th>Add</th>
                <th>Update</th>
              
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @if($drivers)
                @foreach ($drivers as $driver)
                  <tr>
                    <td>{{$driver->id}}</td>
                
                    <td>{{$driver->status}}</td>
                    <td>{{$driver->name}}</td>
                    
                      <td><img src="{{asset('images/drivers/'.$driver->photo)}}" width="100" height="100"></td>
                      <td>{{$driver->willaya->name}}</td>
                      <td>{{$driver->phone}}</td>
                      <td>{{$driver->email}}</td>
                    <td>{{$driver->created_at->format('d.m.y')}}</td>
                    <td>{{$driver->updated_at->format('d.m.y')}}</td>
                    <td>
                     
                      <a href="{{ route('driver.edit',$driver->id) }} " class="btn btn-warning btn-sm">edite</a>
                      <a href="{{ route('driver.delete',$driver->id) }} " onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-sm">delete</a>
                    </td>
                  </tr>
                @endforeach
                @endif
             
            </tbody>
  
          </table>
  
          @if(count($drivers) == 0)
          <p>not-found</p>
          <a name="" id="" class="btn btn-success btn-sm" href="{{route('driver.create')}}" role="button">+new</a>
          @endif
        </div>  
      </div> 
      
  @endsection




   