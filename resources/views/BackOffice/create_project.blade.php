
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Project <i class="fa fa-laptop"></i></h1>
        <form class="form-group col-md-6 offset-3" action="/admin.store_award" method="post" >
                         
            @csrf

            <label class="text-secondary mt-2">Title </label>
            <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" >             
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <div class="form-floating mt-2">
                <textarea name="description"   style="height:100px" class="form-control @error('description') is-invalid @enderror"></textarea>
                <label for="floatingTextarea2" class="text-secondary">Description</label>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="text-secondary mt-2">Repository</label>
            <input placeholder="Github Link" class="form-control @error('repository') is-invalid @enderror" name="repository" type="text">             
            @error('repository')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="text-secondary mt-2">Photo </label>
            <input class="form-control @error('photo') is-invalid @enderror" name="photo" type="file" >             
            @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 

        
            <button class="mt-3 btn btn-primary form-control">Add</button>
                                                
        </form>
    
    </div>
</div>

{{-- <div class="container mt-3">
    <div class="row">
        <div class="col-md-11 offset-0">
        <table class="table  mx-3">
            <thead class="table-primary">
                <tr>
                    <th > Certificate Name</th>
                    <th >  Certificate Provider</th>
                    <th >  Certificate link</th>
                    <th > Actions </th>
                </tr>
            </thead>
            <tbody>
            
                @forelse ($awards as $award)
                    
                <tr>
                    <th scope="col"> {{$award->certificate_name}}</th>
                    <td>{{$award->certificate_provider}}</td>
                    <td>{{$award->certificate_link}}</td>
                    <td>
                        <form action="/admin.destroy_award/{{$award->id}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <a href="/admin.show_award/{{$award->id}}" class="btn btn-warning mt-1"><i class="fas fa-edit"></i></a>
                        </form>
                    </td>
                </tr>

                @empty
                    
                @endforelse
                
            </tbody>
        </table>
    </div>
    </div>
</div> --}}

@endsection




















