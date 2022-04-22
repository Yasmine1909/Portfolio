
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Education <i class="fas fa-graduation-cap"></i></h1>
        <form class="form-group col-md-6 offset-3" action="/admin.update_education/{{$education->id}}" method="post" >
                         
            @csrf
            @method('PUT')
            <label for="school_name " class="text-secondary mt-2">School Name </label>
            <input value="{{$education->school_name}}" class="form-control @error('school_name') is-invalid @enderror" name="school_name" type="text" >             
            @error('school_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <label for="degree " class="text-secondary mt-2">Degree</label>
            <input value="{{$education->degree}}" placeholder="The name" class="form-control @error('degree') is-invalid @enderror" name="degree" type="text">             
            @error('degree')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="start_date  " class="text-secondary mt-2">Started at</label>
            <input  value="{{$education->start_date}}"type="date" name="start_date"  class="form-control @error('start_date') is-invalid @enderror">
            @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="end_date " class="text-secondary mt-2">To</label>
            <input value="{{$education->end_date}}" type="date" name="end_date"  class="form-control @error('end_date') is-invalid @enderror">
            @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-2">
                    <textarea name="description"   style="height:100px" class="form-control @error('description') is-invalid @enderror"> {{$education->description}}</textarea>
                    <label for="floatingTextarea2" class="text-secondary">Description,Mention</label>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="mt-3 btn btn-warning form-control">Add</button>
                         
                         
                                       
        </form>
    
    </div>
</div>



@endsection




















