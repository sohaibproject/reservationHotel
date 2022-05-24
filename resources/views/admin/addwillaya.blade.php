@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Add Willaya</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
               
                     
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('willaya.store')}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{-- {{ method_field('PUT') }} --}}
                        <div class="row">
                        
                             <div class="col-9"></div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> willaya name</label>
                                    <input type="text" class="form-control" id="name" name="name" autofocus >
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">code</label>
                                    <input type="number" class="form-control" id="code" name="code" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">discription</label>
                                    <textarea class="form-control" id="summernote" name="discription" cols="100" rows="7"></textarea>
                                </div>
                            </div>
                        </div>

                        
                     <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">image</label>
                                   
                                    <img src="" style="width: 100px ;height: 100px;" id="blah" alt="Img"><br><br>
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

   