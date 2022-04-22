<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function create_profile(){
        return view('BackOffice.profile',['profile'=>Profile::first()]);
    }
    
    public function store_profile(ProfileRequest $req){
        $profile= new Profile();
        if($req->hasFile('photo'))
        {
            $path=Storage::putFile('profile',$req->photo);
            $profile->photo=$path;
        }
        $profile->first_name=$req->first_name;
        $profile->last_name=$req->last_name;
        $profile->email=$req->email;
        $profile->phone=$req->phone;
        $profile->adress=$req->adress;
        $profile->bio=$req->bio;
        $profile->linkedin=$req->linkedin;
        $profile->github=$req->github;
        $profile->save();
        return back();

    }
}
