
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Edit Your Certificate <i class="fa fa-award"></i></h1>
        <form class="form-group col-md-6 offset-3" action="admin.update_award/{{$award->id}}" method="post" >
                         
            @csrf
            @method('PUT')

            <label for="certificate_name " class="text-secondary mt-2">Certificate Name </label>
            <input value="{{$award->certificate_name}}" class="form-control @error('certificate_name') is-invalid @enderror" name="certificate_name" type="text" >             
            @error('certificate_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <label for="certificate_provider " class="text-secondary mt-2">Certificate Provider </label>
            <input value="{{$award->certificate_provider}}"  class="form-control @error('certificate_provider') is-invalid @enderror" name="certificate_provider" type="text">             
            @error('certificate_provider')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="certificate_link " class="text-secondary mt-2">Certificate Link (optional)</label>
            <input value="{{$award->certificate_link}}" placeholder="Link of the website" class="form-control @error('certificate_link') is-invalid @enderror" name="certificate_link" type="text">             
            @error('certificate_link')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <button class="mt-3 btn btn-warning form-control">Add</button>
                                                
        </form>
    
    </div>
</div>


@endsection

