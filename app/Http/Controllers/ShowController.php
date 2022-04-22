<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Education;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $experiences=Experience::all();
        $educations=Education::all();
       return view('FrontOffice.welcome',[
           "experiences"=>$experiences,
           "educations"=>$educations,
        ]);
    }
}
