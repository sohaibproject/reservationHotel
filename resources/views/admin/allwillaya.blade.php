@extends('layouts.admin')

@section('contenu')


  @include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
   <div class="container-fluid ">
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2 m-2">Willaya</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="btn-group mr-2">
        <a href="{{route('willaya.create')}}" class="btn btn-sm btn-outline-secondary">+new</a>
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
              
                
                <th>code</th>
                <th>image</th>
                <th>discription</th>
               
                <th>Add</th>
                <th>Update</th>
              
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @if($willayas)
                @foreach ($willayas as $willaya)
                  <tr>
                    <td>{{$willaya->id}}</td>
                
                   
                    <td>{{$willaya->name}}</td>
                    <td>{{$willaya->code}}</td>
                   
                    <td><img src="{{asset('images/willayas/'.$willaya->photo)}}" width="100" height="100"></td>
                    <td>{{$willaya->discription}}</td>
                     
                    
                   {{-- <td>{{$willaya->created_at->format('d.m.y')}}</td>
                    <td>{{$willaya->updated_at->format('d.m.y')}}</td> --}}
                    <td>12-45-2020</td>
                    <td>12-45-2020</td>
                    <td>
                     
                      <a href="{{ route('willaya.edit',$willaya->id) }} " class="btn btn-warning btn-sm">edite</a>
                      <a href="{{ route('willaya.delete',$willaya->id) }} " onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-sm">delete</a>
                    </td>
                  </tr>
                @endforeach
                @endif
             
            </tbody>
  
          </table>
  
          @if(count($willayas) == 0)
          <p>not-found</p>
          <a name="" id="" class="btn btn-success btn-sm" href="{{route('willaya.create')}}" role="button">+new</a>
          @endif
        </div>  
        {{ $willayas->links() }}
      </div> 
      
  @endsection




   