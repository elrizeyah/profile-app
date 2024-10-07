<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getProfiles()
    {
        $profiles = Profile::all();
        return view('profiles',['profiles'=> $profiles]);
    }
    
    public function getprofile()
    {
        $profile = Profile::find($id);
        return view('profile',['profile'=> $profile]);
    }

}

