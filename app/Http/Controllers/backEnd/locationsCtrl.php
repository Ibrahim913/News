<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class locationsCtrl extends Controller
{
    public function index()
    {
    	if(Auth::User()->stat == 1){
    		return view('backEnd.locations.index')
    										->withAct('locations');
    	}else{
    		return Redirect::to('/');
    	}
    	
    }
}
