<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;

class dashCtrl extends Controller
{
    public function index()
    {	
    	if(Auth::User()->stat == 1){
    		$users = User::get();
    		return view('backEnd.index')
    							->withUsers($users)
    							->withAct('');
    	}else{
    		return Redirect::to('/');
    	}
    	
    }
}
