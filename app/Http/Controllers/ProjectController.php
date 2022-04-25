<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ProjectUpdateRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create_project()
    {
        return view('BackOffice.create_project',['projects'=>Project::all(),'nav'=>'project']);
    }

    public function store_project(ProjectRequest $req)
    {
        if($req->hasFile('photo'))
        {
            $path=Storage::putFile('projects',$req->photo);
            $data=$req->validated();
            $data['photo']=$path;
            Project::create($data);
        }
        return back();
    }

    public function destroy_project($id)
    {
        $project=Project::findOrFail($id);
        Storage::delete('projects',$project->photo);
        $project->delete();
        return back();
    }

    public function show_project($id)
    {
        return view('BackOffice.show_project',['project'=>Project::findOrFail($id)]);

    }

    public function update_project(ProjectUpdateRequest $req,$id)
    {
        $project=Project::findOrFail($id);
        $project->title=$req->title;
        $project->description=$req->description;
        $project->repository=$req->repository;

        if($req->hasFile('photo'))
        {
            Storage::delete('projects',$project->photo);
            $path=Storage::putFile('projects',$req->photo);
            $project->photo=$path;
        }
        $project->save();
        return back();
    }

}
