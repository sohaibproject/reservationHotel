@extends('layouts.admin')

@section('contenu')


  @include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
   <div class="container-fluid ">
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2 m-2">Tours</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="btn-group mr-2">
        <a href="{{route('tour.create')}}" class="btn btn-sm btn-outline-secondary">+ new</a>
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
              <th>Description</th>
              <th>price</th>
              <th>image</th>
              <th>willaya</th>
              <th>tour type</th>
              
             <th>departure</th>
              <th>arrive</th>
             <th>start</th>
              <th>end</th>
            
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
            @if($tours)
              @foreach ($tours as $tour)
                <tr>
                  <td>{{$tour->id}}</td>
              
                  <td>{{$tour->status}}</td>
                  <td>{{$tour->name}}</td>
                  <td>{{substr($tour->discription,0,80)}}
                    <span>...</span>
                </td>
                    <td>{{$tour->price}}</td>
                    <td><img src="{{asset('images/tours/'.$tour->photo)}}" width="100" height="100"></td>
                    @if ($tour->wilaya_id=="")
                    <td>{{$tour->wilaya_id}}</td>
                
                @else
                <td>{{$tour->willaya->name}}</td>
                @endif
                  
                    @if ($tour->tour_type_id=="")
                        <td>{{$tour->tour_type_id}}</td>
                    @else
                    <td>{{$tour->tour_type->name}}</td>
                    @endif
                    
                    
                  <td>{{$tour->place_d}}</td>
                  <td>{{$tour->place_a}}</td>
                  <td>{{$tour->date_start}}</td>
                  <td>{{$tour->date_end}}</td>
                  <td>
                   
                    <a href="{{ route('tour.edit',$tour->id) }} " class="btn btn-warning btn-sm">edite</a>
                    <a href="{{ route('tour.delete',$tour->id) }} " onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-sm">delete</a>
                  </td>
                </tr>
              @endforeach
              @endif
           
          </tbody>

        </table>

        @if(count($tours) == 0)
        <p>not-found</p>
        <a name="" id="" class="btn btn-success btn-sm" href="{{route('tour.create')}}" role="button">+new</a>
        @endif
      </div>  
    </div> 
    
@endsection