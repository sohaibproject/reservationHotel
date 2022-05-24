@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Edite driver</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('driver.update',$driver->id)}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{ method_field('PUT') }}
                        {{-- {{ method_field('PUT') }} --}}
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group" >
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="published" @if($driver->status == "published")selected @endif >published</option>
                                        <option value="unpublished"  @if($driver->status == "unpublished")selected @endif>unpublished</option>
                                      </select>
                                  </div>
                            </div> 
                           
                         <div class="col-4">
                                <div class="form-group">
                                    <label for="name">willaya</label>
                                    <select name="wilaya_id" id="wilaya_id" class="form-control">
                                        {{-- <option value="0">...</option> --}}
                                        @isset($willaya) 
                                            @foreach ($willaya as $willaya)
                                                <option value="{{$willaya->id}}"  @if($driver->wilaya_id == $willaya->id) selected @endif>{{$willaya->name}}</option>
                                            @endforeach 
                                        @endif
                                    </select>
                                </div>
                            </div> 
                             <div class="col-9"></div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> Driver name</label>
                                    <input type="text" class="form-control" id="name" value="{{$driver->name}}" name="name" autofocus >
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="password" value="{{$driver->password}}">
                        <input type="hidden" name="image" value="{{$driver->photo}}">
                        <input type="hidden" name="mail" value="{{$driver->email}}">
                        {{-- <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">password</label>
                                    <input type="text" class="form-control" id="password" name="password" >
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">email</label>
                                    <input type="email" class="form-control" id="email" value="{{$driver->email}}"  name="email" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">phone</label>
                                    <input type="text" class="form-control" id="phone" value="{{$driver->phone}}" name="phone" >
                                </div>
                            </div>
                        </div>
                       
                      
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">image</label>
                                    {{-- <input type="file" name="photo" accept="image/*"    class="form-control input-height" /> --}}

                                    {{-- begin --}}
                                    <img src="{{asset('images/drivers/'.$driver->photo)}}" style="width: 100px ;height: 100px;" id="blah" alt="Img"><br><br>
                                    <input type="file" id="inputFile" onchange="readUrl(this)"  name="photo" accept="image/*"    class="form-control input-height">
                                    <button type="button" class="btn btn-danger" onclick="removeImg()">Close</button>

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

   