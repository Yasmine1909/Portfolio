<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $experiences=Experience::all();
        $educations=Education::all();
        $awards=Award::all();
        $projects=Project::all();
        $profile=Profile::first();
       return view('FrontOffice.welcome',[
           "experiences"=>$experiences,
           "educations"=>$educations,
           "awards"=>$awards,
           "projects"=>$projects,
           "profile"=>$profile,
        ]);
    }
}
