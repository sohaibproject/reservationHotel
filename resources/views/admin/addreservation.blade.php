@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Add Reservation</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
                
               
                
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('reservation.store')}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{-- {{ method_field('PUT') }} --}}
                        @if (count($rooms) !=0)
                        
              
                        <div class="row">
                            
                           
                       
                         <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> room </label>
                                    <select name="room_id" id="room_type_id" class="form-control" >
                                        {{-- <option value="0">...</option> --}}
                                        
                                            @foreach ($rooms as $room)
                                                <option value="{{$room->id}}">{{$room->name}}</option>
                                            @endforeach 
                                      
                                    </select>
                                </div>
                            </div> 
                             <div class="col-9"></div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> client name</label>
                                    <input type="text" class="form-control" id="name" name="name" autofocus >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="phone"> client phone</label>
                                    <input type="number" class="form-control" id="name" name="phone" autofocus >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> client email</label>
                                    <input type="email" class="form-control" id="name" name="email" autofocus >
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">check In</label>
                                    <input type="date" class="form-control" id="price" name="checkIn" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">check Out</label>
                                    <input type="date" class="form-control" id="price" name="checkOut" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-9">
                            <div class="form-group">
                                <label for="summernote">note</label>
                                <textarea class="form-control" id="summernote" name="note" cols="98" rows="7"></textarea>
                            </div>
                            </div>
                        </div>

                        
                     
                        
                        
                          <div class="row mx-auto mb-4">
                            <div class="col-9">
                            <button type="submit" class="btn btn-primary">save</button>
             <a href="{{ url()->previous() }}" class="btn btn-secondary ">cancel</a>
                
                            <input type="hidden" name="previous" value="{{ url()->previous() }}">

                              </div> 
                              </div> 
                              @else
                   <p>you need add room  first  </p>
                              @endif
                              
                       
                    </form>
              
                
              
               

        </div>
        </div>
    </div>
    @endsection
    {{-- @section('mx-js')
    <script>

        var a = document.getElementById("blah");
        function readUrl(input){
        if(input.files){
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload=(e)=>{
                a.src = e.target.result;
            }
        }
        }
        
        var inputFile = document.getElementById("inputFile");
        removeImg=()=>{
           a.src=""; 
           inputFile.value=""; 
        }
        
        
        
        </script>
    @endsection --}}

   