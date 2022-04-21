<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EducationRequest;
use App\Models\Education;

class EducationController extends Controller
{
    public function create_education(){
        return view('BackOffice.create_education',['educations'=>Education::all()]);
    }
    
    public function store_education(EducationRequest $req){
            $education=new Education();
            $education->school_name=$req->school_name;
            $education->degree=$req->degree;
            $education->description=$req->description;
            $education->start_date=$req->start_date;
            $education->end_date=$req->end_date;
            $education->save();
            return back();
    }

    public function destroy_education($id){
            Education::findorFail($id)->delete();
            return back();
    }
    
}
