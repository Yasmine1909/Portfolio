
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Edit Your Project <i class="fa fa-laptop"></i></h1>
                                           
        <form enctype="multipart/form-data" class="form-group col-md-6 offset-3" action="/admin.update_project/{{$project->id}}" method="post" >
                         
            @csrf
            @method('PUT')
                                             
            <label class="text-secondary mt-2">Title </label>
            <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" value="{{$project->title}}">             
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <div class="form-floating mt-2">
                <textarea name="description"   style="height:100px" class="form-control @error('description') is-invalid @enderror"> {{$project->description}}</textarea>
                <label for="floatingTextarea2" class="text-secondary">Description</label>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="text-secondary mt-2">Repository</label>
            <input  value="{{$project->repository}}" placeholder="Github Link" class="form-control @error('repository') is-invalid @enderror" name="repository" type="text">             
            @error('repository')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="mt-2">photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"
                   >
                @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

        
            <button class="mt-3 btn btn-primary form-control">Add</button>
                                                
        </form>
    
    </div>
</div>



@endsection




















