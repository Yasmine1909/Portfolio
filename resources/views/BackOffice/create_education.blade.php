
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Education <i class="fas fa-graduation-cap"></i></h1>
        <form class="form-group col-md-6 offset-3" action="/admin.store_education" method="post" >
                         
            @csrf

            <label for="school_name " class="text-secondary mt-2">School Name </label>
            <input class="form-control @error('school_name') is-invalid @enderror" name="school_name" type="text" >             
            @error('school_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <label for="degree " class="text-secondary mt-2">Degree</label>
            <input placeholder="The name" class="form-control @error('degree') is-invalid @enderror" name="degree" type="text">             
            @error('degree')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="start_date  " class="text-secondary mt-2">Started at</label>
            <input type="date" name="start_date"  class="form-control @error('start_date') is-invalid @enderror">
            @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="end_date " class="text-secondary mt-2">To</label>
            <input type="date" name="end_date"  class="form-control @error('end_date') is-invalid @enderror">
            @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-2">
                    <textarea name="description"   style="height:100px" class="form-control @error('description') is-invalid @enderror"></textarea>
                    <label for="floatingTextarea2" class="text-secondary">Description,Mention</label>
            </div>
            @error('description')
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
                    <th > School name </th>
                    <th >  Le nom du diplome</th>
                    <th >  Mentions</th>
                    <th > Started at </th>
                    <th > To </th>
                    <th > Actions </th>
                </tr>
            </thead>
            <tbody>
            
                @forelse ($educations as $education)
                    
                <tr>
                    <th scope="col"> {{$education->school_name}}</th>
                    <td>{{$education->degree}}</td>
                    <td>{{$education->description}}</td>
                    <td>{{$education->start_date}}</td>
                    <td>{{$education->end_date}}</td>
                    <td>
                        <form action="/admin.destroy_education/{{$education->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <a href="/admin.show_education/{{$education->id}}" class="btn btn-warning mt-1"><i class="fas fa-edit"></i></a>
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




















