
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Project <i class="fa fa-laptop"></i></h1>
                                           
        <form enctype="multipart/form-data" class="form-group col-md-6 offset-3" action="/admin.store_project" method="post" >
                         
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

<div class="container mt-3">
    <div class="row">
        <div class="col-md-11 offset-0">
        <table class="table  mx-3">
            <thead class="table-primary">
                <tr>
                    <th >Title</th>
                    <th > Descrpiption</th>
                    <th >Photo</th>
                    <th >Repository</th>
                    <th > Actions </th>
                </tr>
            </thead>
            <tbody>
            
                @forelse ($projects as $project)
                    
                <tr>
                    <th scope="col"> {{$project->title}}</th>
                    <td>{{$project->description}}</td>
                    <td> 
                        <img src="{{asset('storage/'.$project->photo)}}" style="width:50px;">
                    </td>
                    <td> <a href="{{$project->repository}}" target="_blank" rel="noopener noreferrer"> <i class="fab fa-github h4"></i> </a> </td>
                    <td>
                        <form action="admin.destroy_project/{{$project->id}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <a href="/admin.show_project/{{$project->id}}" class="btn btn-warning mt-1"><i class="fas fa-edit"></i></a>
                        </form>
                    </td>
                </tr>
                                                   
                @empty
                    
                @endforelse
                
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection




















