@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Edite Hotel</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('room.update',$room->id)}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{ method_field('PUT') }}
                        {{-- {{ method_field('PUT') }} --}}
                        <div class="row">
                          
                            

                         <div class="col-4">
                                <div class="form-group">
                                    <label for="name">type room</label>
                                    <select name="room_type_id" id="room_type_id" class="form-control" >
                                        {{-- <option value="0">...</option> --}}
                                        
                                            @foreach ($type_room as $type_room)
                                                <option value="{{$type_room->id}}" @if($room->room_type_id == $type_room->id) selected @endif>{{$type_room->name}}</option>
                                            @endforeach 
                                      
                                    </select>
                                </div>
                            </div> 
                             <div class="col-9"></div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> room name</label>
                                    <input type="text" class="form-control" id="name" value="{{$room->name}}"  name="name" autofocus >
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="image" value="{{$room->photo}}">

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">price</label>
                                    <input type="number" class="form-control" id="price" value="{{$room->price}}" name="price" >
                                </div>
                            </div>
                        </div>
                        |<input type="hidden" name="image" value="{{$room->photo}}">
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">number place</label>
                                    <input type="number" class="form-control" id="price" value="{{$room->nbr_place}}" name="nbr_place" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                            <div class="form-group">
                                <label for="summernote">description</label>
                                <textarea class="form-control" id="summernote" name="discription" cols="98" rows="7">{{$room->discription}} </textarea>
                            </div>
                            </div>
                        </div>
                       
                      
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">image</label>
                                    {{-- <input type="file" name="photo" accept="image/*"    class="form-control input-height" /> --}}

                                    {{-- begin --}}
                                    <img src="{{asset('images/rooms/'.$room->photo)}}" style="width: 100px ;height: 100px;" id="blah" alt="Img"><br><br>
                                    <div class="d-flex">
                                        <input type="file" id="inputFile" onchange="readUrl(this)"  name="photo" accept="image/*"    class="form-control input-height w-75">
                                        <button type="button" class="btn btn-danger ml-3" onclick="removeImg()">remove image</button>
                                    </div>
                                 

                                    {{-- end --}}
                                </div>
                            </div>
                        </div>
                        
                        
                          <div class="row mx-auto">
                            <div class="col-9">
                            <button type="submit" class="btn btn-primary">save</button>
             <a href="{{ url()->previous() }}" class="btn btn-secondary">cancel</a>
                
                            <input type="hidden" name="previous" value="{{ url()->previous() }}">

                              </div> 
                              </div> 
                              
                       
                    </form>
              
                
              
           

        </div>
        </div>
    </div>
    @endsection
    @section('mx-js')
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
    @endsection

   