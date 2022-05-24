@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">edite Categorie</h1>
    
          </div>
        
    
        <div class="row container-fluid">
            <div class="col-6">
            <form method="POST" action="{{ route('categorie.update',$categorie->id) }}">
                   @csrf
                   {{ method_field('PUT') }}
                    <div class="form-group" style="width: 50%">
                      <label for="status">Status</label>
                      <select class="form-control" name="status" id="status">
                        <option value="published" @if($categorie->status == "published") selected @endif >published</option>
                        <option value="unpublished" @if($categorie->status == "unpublished") selected @endif>unpublished</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="name">category-name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$categorie->name}}" autofocus required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="slug">@lang('adminLang.category-seo-name')</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                    </div> --}}
                    <div class="form-group">
                        <label for="summernote">description</label>
                        <textarea class="form-control" id="summernote" name="discription" rows="7">{{$categorie->discription}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">save</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">cancel</a>
                    <input type="hidden" name="previous" value="{{ url()->previous() }}">
                </form>
    
            </div>
        </div>

    </div>
@endsection