<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Redirect;
use Hash;
use Validator;

class authCtrl extends Controller
{
    public function signup()
    {
    	if(Auth::check())
            return Redirect::back();
        else
            return view('frontEnd.auth.signup');
    }

    public function doSignup(Request $request)
    {
    	Validator::make($request->all(),[
    		'email' => 'required|max:100',
    		'password' => 'required',
    		'name' => 'required|max:100',
    		'phone' => 'required|max:11|min:11',
    		'nationalID' => 'required|max:14|min:14',
    		'gender' => 'required'
    	],[
    		'NID' => 'National ID is required with 14 char max'
    	])->validate();

    	if(isset($errors) && count($errors) > 0){
    		return Redirect::back();
    	}else{
    		try{
    			$row = new User;
    			$row->email 	= $request->input('email');
    			$row->password 	= hash::make($request->input('password'));
    			$row->name 		= $request->input('name');
    			$row->phone 	= $request->input('phone');
    			$row->nationalID= $request->input('nationalID');
    			$row->gender 	=$request->input('gender');

    			


    			$data = ['email'=>$request->input('email') , 'password'=>$request->input('password')];

    			if($row->save()){
    				if(Auth::attempt($data)){
						return Redirect::to('/');
	    			}else{
		    			return Redirect::back();
		    			Session::flash('err','Auth err');
	    			}
    			}
	    			

    		}catch(\Exception $e){
    			Session::flash('err','National ID or email exists');
    			return Redirect::back();
    		}
    		
    	}
    }

    public function login()
    {   
        if(Auth::check())
            return Redirect::back();
        else
            return view('frontEnd.auth.login');
    }

     public function doLogin(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        $data       = ['email'=>$email , 'password'=>$password];

        if(Auth::attempt($data)){
			return Redirect::to('/');
		}else{
			Session::flash('err','Username of password are wrong');

			return Redirect::back();
		}

        return Redirect::to("/");
    }


    public function logout()
    {
    	Auth::logout();
        return Redirect::to('/');
    }
}
