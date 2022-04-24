<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create_project()
    {
        return view('BackOffice.create_project');
    }

    public function store_project(ProjectRequest $req)
    {
        if($req->hasFile('photo'))
        {
            $path=Storage::putFile('projects',$req->photo);
            $data=$req->validated();
            $data['photo']=$path;
            Project::create($data);
            return back();
        }
    }

    public function destroy_project($id)
    {
        Project::findOrFail($id)->delete();
        return back();
    }

    public function show_project($id)
    {
        return view('BackOffice.show_project',['project'=>Project::findOrFail($id)]);

    }

    public function update_project(ProjectRequest $req,$id)
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
    }

}
