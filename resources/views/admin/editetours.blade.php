@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Edite Tour</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('tour.update',$tour->id)}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{ method_field('PUT') }}
                        {{-- {{ method_field('PUT') }} --}}
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group" >
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="published" @if($tour->status == "published")selected @endif >published</option>
                                        <option value="unpublished"  @if($tour->status == "unpublished")selected @endif>unpublished</option>
                                      </select>
                                  </div>
                            </div> 
                           
                         <div class="col-4">
                                <div class="form-group">
                                    <label for="name">categorie</label>
                                    <select name="tour_type_id" id="tour_type_id" class="form-control">
                                        {{-- <option value="0">...</option> --}}
                                        @isset($tour_type) 
                                            @foreach ($tour_type as $tour_type)
                                                <option value="{{$tour_type->id}}"  @if($tour->tour_type_id == $tour_type->id) selected @endif>{{$tour_type->name}}</option>
                                            @endforeach 
                                        @endif
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
                                                <option value="{{$willaya->id}}"  @if($tour->wilaya_id == $willaya->id) selected @endif>{{$willaya->name}}</option>
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
                                    <label for="name"> tour name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$tour->name}}" autofocus >
                                </div>
                            </div>
                        </div>
                      
                        <input type="hidden" name="image" value="{{$tour->photo}}">
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">price</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{$tour->price}}" >
                                </div>
                            </div>
                        </div>
                       

                      
                        <div class="row">
                            <div class="form-group">
                                <label for="summernote">description</label>
                                <textarea class="form-control" id="summernote" name="discription" cols="100" rows="7">{{$tour->discription}} </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> place departure</label>
                                    <input type="text" class="form-control" id="name" name="place_d" value="{{$tour->place_d}}" autofocus >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> place arrive</label>
                                    <input type="text" class="form-control" id="name" name="place_a" value="{{$tour->place_a}}" autofocus >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">start date</label>
                                    <input type="date" class="form-control" id="date_start" name="date_start"  value="{{$tour->date_start}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">end date</label>
                                    <input type="date" class="form-control" id="date_end" name="date_end"  value="{{$tour->date_end}}" >
                                </div>
                            </div>
                        </div>
                       
                      
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">image</label>
                                   
                                    <img src="{{asset('images/tours/'.$tour->photo)}}" style="width: 100px ;height: 100px;" id="blah" alt="Img"><br><br>
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

   