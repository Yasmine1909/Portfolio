
@extends('..BackLayouts.app')
@section('content')


<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Award <i class="fa fa-award"></i></h1>
        <form class="form-group col-md-6 offset-3" action="/admin.store_award" method="post" >
                         
            @csrf

            <label for="certificate_name " class="text-secondary mt-2">Certificate Name </label>
            <input class="form-control @error('certificate_name') is-invalid @enderror" name="certificate_name" type="text" >             
            @error('certificate_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror   

            <label for="certificate_provider " class="text-secondary mt-2">Certificate Provider </label>
            <input  class="form-control @error('certificate_provider') is-invalid @enderror" name="certificate_provider" type="text">             
            @error('certificate_provider')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="certificate_link " class="text-secondary mt-2">Certificate Link (optional)</label>
            <input placeholder="Link of the website" class="form-control @error('certificate_link') is-invalid @enderror" name="certificate_link" type="text">             
            @error('certificate_link')
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
</div>

@endsection




















