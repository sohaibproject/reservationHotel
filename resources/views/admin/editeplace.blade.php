@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Add places</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
     <div class="row "> 
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('place.update',$place->id)}}" enctype="multipart/form-data">
                      
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group" style="width: 50%">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                      <option value="published" @if($place->status == "published")selected @endif >published</option>
                                      <option value="unpublished"  @if($place->status == "unpublished")selected @endif>unpublished</option>
                                    </select>
                                  </div>
                            </div> 
                             <div class="col-4">
                                <div class="form-group">
                                    <label for="name">categorie</label>
                                    <select name="categorie_id" id="categorie_id" class="form-control">
                                        {{-- <option value="0">...</option> --}}
                                        @isset($categorie) 
                                            @foreach ($categorie as $categorie)
                                                <option value="{{$categorie->id}}" @if($place->categorie_id == $categorie->id) selected @endif>{{$categorie->name}}</option>
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
                                                <option value="{{$willaya->id}}"  @if($place->wilaya_id == $willaya->id) selected @endif>{{$willaya->name}}</option>
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
                                    <label for="name">place name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$place->name}}" autofocus >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{$place->slug}} ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="summernote">description</label>
                                <textarea class="form-control" id="summernote" name="discription" cols="100" rows="7">{{$place->discription}} </textarea>
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
               
              
             
               
                <br>

                {{-- begin edite images --}}
                @isset($photos) 
                <div class="row mx-auto">
                    <div class="form-group col-9">
                   <h1>your Previous images  </h1>
                   
               
               @foreach ($photos as $photo)
               @php
                //  $test = uniqid("photo");
                 $id = $photo->id;
               @endphp
                
               <div class="row">
                <div class="card border " style="margin-left: 15px " id="{{$id}}">
                    <img src="{{asset('images/places/'.$photo->file_name)}}"  style="width: 100px; height: 100px;" /><div class="m-2" ><button class="btn-danger" onClick="kill({{$id}})"> delete</button></div>
                    
                    
                    </div>
                    </div>
    
                    @endforeach
                    @endif
              
                </div>
                </div>
                {{-- end edite images --}}
                <div class="row mx-auto">
                    <div class="form-group col-9">
                    <h3  >Upload Image for your place</h3>
                   
                </div>
                </div>
                <br>
                <br>
                
                 <div class="row mx-auto increment">
                    <div class="form-group col-9">
                     
                        <form   enctype="multipart/form-data" id="uploadImages" >
                            <div id="errors"></div>
                            <div class="form-group">
                                <label> Select Images</label>
                                <input type="file" class="form-control" name="images[]" multiple  >
                                <input type="hidden" name="index" value={{$place->id}} id="index">
                            </div>
                            <div class="form-group">
                                <input type="submit" class=" btn btn-success"  value="Save"  >
                            </div>
        
                            @csrf
                        </form>

                         <div class="row show-images">
          
                           </div>
                     
                
                </div>
                </div> 
           

        </div>
        </div>
        </div>
        @endsection

 @section('mx-js')
 {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
   <script language="JavaScript" type="text/javascript"  >
 
 
    
        $("#uploadImages").submit(function(e){
   
            var index =document.getElementById('index').value; 
            var formData  = new FormData(jQuery('#uploadImages')[0]);
            e.preventDefault();
            formData.append('index',index);
            $.ajax({
                url:"{{url('/store-images')}}",
                type:'POST',
                data:formData,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    $("#errors").html("<p class='alert alert-success'> Uploaded Success</p>");
                    // $(".show-images").html(data)
                    $(".show-images").append(data.showImage);
                    console.log(data.showImage);
                    
                },
                error:function(xhr, status, error)
                {
                    $("#errors").html('');
                    $.each(xhr.responseJSON.errors,function(key,item)
                    {
                        $("#errors").append("<p class='alert alert-danger'> "+ item +" </p>")
                    })
                }
            })


        });
        // delete precedente image 
        function kill(id){
            var w = document.getElementById(id);
            w.remove();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     $.ajax({
		url: "{{url('/remove_pre_image')}}",
		type: "POST",
		data:  {'id':id},
		success: function(data){
			
            console.log(data.success);
		},
		error: function(data){
            console.log(data.error);
        } 	        
	});

// //    alert("is deleted ");
// console.log(id);/remove_pre_image
// console.log(kill);

 }
 // delete resente  image 
 function deleteImage(index,tito) { 
        
        
        const x = tito;
        x.toString();
     x.outerHTML;
    //  var y = document.getElementById(x);
    y=x.id;
        console.log(y);
       var w = document.getElementById(y);
    console.log(w);
     w.remove();
     console.log("is deleted ");
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     $.ajax({
		url: "{{url('/remove_image')}}",
		type: "POST",
		data:  {'index':index},
		success: function(data){
			
            console.log(data.success);
		},
		error: function(data){
            console.log(data.error);
        } 	        
	});

      
    }
    
    
  
     </script>
            
        @endsection
       