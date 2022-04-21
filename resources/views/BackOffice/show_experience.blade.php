@extends('..BackLayouts.app')
@section('content')
    
<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Experience</h1>
        <form class="form-group col-md-6 offset-3" action="/admin.update_experience/{{$experience->id}}" method="post" >

            @csrf
            @method('PUT')
            <label for="start_date" class="text-secondary mt-2" >Title </label>
            <input class="form-control " name="title" type="text" value="{{$experience->title}}">

            <label for="start_date" class="text-secondary mt-2" >Company Name</label>
            <input class="form-control " value="{{$experience->company_name}}" name="company_name" type="text">

            <label for="start_date" class="text-secondary mt-2" >Started at</label>
            <input type="date" name="start_date"  class="form-control" value="{{$experience->start_date}}">

            <label for="end_date" class="text-secondary mt-2" >To</label>
            <input type="date" value="{{$experience->end_date}}" name="end_date"  class="form-control">

            <div class="form-floating mt-2">
                    <textarea name="description"   style="height:100px" class="form-control">{{$experience->description}}</textarea>
                    <label for="floatingTextarea2" class="text-secondary">Description</label>
            </div>
            <button class="mt-3 btn btn-warning form-control">Save</button>
   
        </form>
    
    </div>
</div>

@endsection
