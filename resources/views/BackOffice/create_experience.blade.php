@extends('..BackLayouts.app')
@section('content')
    
<div class="container mt-4">
    <div class="row">
        <h1 class="text-center text-secondary"> Create New Experience</h1>
        <form class="form-group col-md-6 offset-3" action="/store_experience" method="post" >

            @csrf
            <label for="start_date  " class="text-secondary mt-2">Title </label>
            <input class="form-control " name="title" type="text" >

            <label for="start_date  " class="text-secondary mt-2">Company Name</label>
            <input class="form-control " name="company_name" type="text">

            <label for="start_date  " class="text-secondary mt-2">Started at</label>
            <input type="date" name="start_date"  class="form-control">

            <label for="end_date " class="text-secondary mt-2">To</label>
            <input type="date" name="end_date"  class="form-control">

            <div class="form-floating mt-2">
                    <textarea name="description"   style="height:100px" class="form-control"></textarea>
                    <label for="floatingTextarea2" class="text-secondary">Description</label>
            </div>
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
                    <th > Title </th>
                    <th > Company name </th>
                    <th > Started at </th>
                    <th > To </th>
                    <th > Action </th>
                </tr>
            </thead>
            <tbody>
            
                @forelse ($experiences as $experience)
                    
                <tr>
                    <th scope="col"> {{$experience->title}}</th>
                    <td>{{$experience->company_name}}</td>
                    <td>{{$experience->start_date}}</td>
                    <td>{{$experience->end_date}}</td>
                    <td>
                        <form action="/destroy_experience/{{$experience->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-danger">Delete</button>
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
