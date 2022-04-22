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
        // $profile= new Profile();
        // $profile->first_name=$req->first_name;
        // $profile->last_name=$req->last_name;
        // $profile->email=$req->email;
        // $profile->phone=$req->phone;
        // $profile->adress=$req->adress;
        // $profile->bio=$req->bio;
        // $profile->linkedin=$req->linkedin;
        // $profile->github=$req->github;
        // $profile->save();
        
        //Méthode2
        //Ne pas oublier les champs (fillable) dans Model Profile
        if($req->hasFile('photo'))
           {        
            $path=Storage::putFile('profile',$req->photo);

            $data=$req->validated();
            $data['photo']=$path;
            Profile::create($data);
                       
        }             
                      
        return back(); 
                      
    }

    public function destroy_profile($id)
    {
        Profile::findOrFail($id)->delete();
        return back();
    }

    public function show_profile($id)
    {
        return view('BackOffice.show_profile',['profile'=>Profile::findOrFail($id)]);
    
    }
    
    public function update_profile(ProfileRequest $req,$id)
    {
        $profile=Profile::findOrFail($id);
        $profile= new Profile();
        $profile->first_name=$req->first_name;
        $profile->last_name=$req->last_name;
        $profile->email=$req->email;
        $profile->phone=$req->phone;
        $profile->adress=$req->adress;
        $profile->bio=$req->bio;
        $profile->linkedin=$req->linkedin;
        $profile->github=$req->github;
        // in case of user want to set another photo
        if($req->hasFile('photo'))
        {
            Storage::delete('profile',$profile->photo);
            $path=Storage::putFile('profile',$req->photo);
            $profile->photo=$path;
        }
        
        $profile->save();
        return back();
    }
    
        
    
}
