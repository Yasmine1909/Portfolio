<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function create_experience()
    {
        $experiences=Experience::all();
        return view('BackOffice.create_experience',['experiences'=>$experiences]);
    }

    public function store_experience(Request $req)
    {
        $experience = new Experience();
        $experience->title=$req->title;
        $experience->company_name=$req->company_name;
        $experience->description=$req->description;
        $experience->start_date=$req->start_date;
        $experience->end_date=$req->end_date;
        $experience->save();
        return back();
    }

    public function destroy_experience($id)
    {
        Experience::findorFail($id)->delete();
        return back();
    }
    
}
