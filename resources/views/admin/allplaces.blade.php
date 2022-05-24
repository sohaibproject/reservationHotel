@extends('layouts.admin')

@section('contenu')


  @include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
   <div class="container-fluid ">
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2 m-2">Places</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="btn-group mr-2">
        <a href="{{route('place.create')}}" class="btn btn-sm btn-outline-secondary">+ new</a>
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
              <th>slug</th>
              <th>image</th>
              <th>willaya</th>
              <th>categorie</th>
              <th>Add</th>
              <th>Update</th>
            
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
            @if($Places)
              @foreach ($Places as $Place)
                <tr>
                  <td>{{$Place->id}}</td>
              
                  <td>{{$Place->status}}</td>
                  <td>{{$Place->name}}</td>
                  <td>{{substr($Place->discription,0,80)}}
                    <span>...</span>
                </td>
                    <td>{{$Place->slug}}</td>
                    <td>{{$Place->photos()->count()}}</td>
                    @if ($Place->wilaya_id=="")
                        <td>{{$Place->wilaya_id}}</td>
                    
                    @else
                    <td>{{$Place->willaya->name}}</td>
                    @endif
                    @if ($Place->categorie_id=="")
                        <td>{{$Place->categorie_id}}</td>
                    @else
                    <td>{{$Place->categorie->name}}</td>
                    @endif
                    
                    
                  <td>{{$Place->created_at->format('d.m.y')}}</td>
                  <td>{{$Place->updated_at->format('d.m.y')}}</td>
                  <td>
                   
                    <a href="{{ route('place.edit',$Place->id) }} " class="btn btn-warning btn-sm">edite</a>
                    <a href="{{ route('place.delete',$Place->id) }} " onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-danger btn-sm">delete</a>
                  </td>
                </tr>
              @endforeach
              @endif
           
          </tbody>

        </table>

        @if(count($Places) == 0)
        <p>not-found</p>
        <a name="" id="" class="btn btn-success btn-sm" href="{{route('place.create')}}" role="button">+new</a>
        @endif
      </div>  
    </div> 
    
@endsection