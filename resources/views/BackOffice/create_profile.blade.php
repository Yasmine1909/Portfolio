
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create Your Profile <i class="fas fa-user"></i></h1>
        <form class="form-group col-md-6 offset-3"  enctype="multipart/form-data" action="/admin.store_profile" method="post" >
                         
            @csrf

            <label  class="text-secondary mt-2">First Name </label>
            <input class="form-control @error('first_name') is-invalid @enderror" name="first_name" type="text" >             
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <label  class="text-secondary mt-2">Last Name </label>
            <input class="form-control @error('last_name') is-invalid @enderror" name="last_name" type="text" >             
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="text-secondary mt-2">Email </label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" >             
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="text-secondary mt-2">adress </label>
            <input class="form-control @error('adress') is-invalid @enderror" name="adress" type="text" >             
            @error('adress')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="text-secondary mt-2">Phone </label>
            <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="text" >             
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-2">
                <textarea name="bio"   style="height:100px" class="form-control @error('bio') is-invalid @enderror"></textarea>
                <label for="floatingTextarea2" class="text-secondary">Bio</label>
            </div>
            @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="text-secondary mt-2">Photo </label>
            <input class="form-control @error('photo') is-invalid @enderror" name="photo" type="file" >             
            @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="text-secondary mt-2">Linkedin </label>
            <input class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" type="text" >             
            @error('linkedin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label  class="text-secondary mt-2">Github </label>
            <input class="form-control @error('github') is-invalid @enderror" name="github" type="text" >             
            @error('github')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button class="mt-3 btn btn-primary form-control">Add</button>
                         
                         
                                       
        </form>
    
    </div>
</div>


@endsection




















