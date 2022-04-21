@extends('..BackLayouts.app')
@section('content')
    
<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Experience</h1>
        <form class="form-group col-md-6 offset-3" action="/admin.update_experience/{{$experience->id}}" method="post" >

            @csrf
            @method('PUT')
            <label for="start_date  " class="text-secondary mt-2">Title </label>
            <input value="{{$experience->title}}" class="form-control @error('title') is-invalid @enderror" name="title" type="text" >             
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <label for="start_date  " class="text-secondary mt-2">Company Name</label>
            <input value="{{$experience->company_name}}" class="form-control @error('company_name') is-invalid @enderror" name="company_name" type="text">             
            @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="start_date  " class="text-secondary mt-2">Started at</label>
            <input value="{{$experience->start_date}}" type="date" name="start_date"  class="form-control @error('start_date') is-invalid @enderror">
            @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="end_date " class="text-secondary mt-2">To</label>
            <input value="{{$experience->end_date}}" type="date" name="end_date"  class="form-control @error('end_date') is-invalid @enderror">
            @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-2">
                    <textarea  name="description"   style="height:100px" class="form-control @error('description') is-invalid @enderror">{{$experience->description}}</textarea>
                    <label for="floatingTextarea2" class="text-secondary">Description</label>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="mt-3 btn btn-warning form-control">Save</button>
   
        </form>
    
    </div>
</div>

@endsection
