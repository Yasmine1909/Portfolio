<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $experiences=Experience::all();
       return view('FrontOffice.welcome',["experiences"=>$experiences]);
    }
}
