<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Redirect;
use Session;
use Validator;
use Hash;

class usersCtrl extends Controller
{
    public function index()
    {	
    	if( isset($_GET['search']) ){
    		$users = User::where('name','LIKE','%'.$_GET['search'].'%')->get();
    	}else{
	    	$users = user::get();
    	}
    	return view('backEnd.users.index')->withAct('users')
    									->withUsers($users);
    									
    }

//add
    public function add()
    {
    	return view('backEnd.users.add')->withAct('users');;
    }

    
    public function doAdd(Request $request)
    {
    	Validator::make($request->all(),[
    		'email' => 'required|max:100',
    		'pass' => 'required',
    		'name' => 'required|max:100',
    		'phone' => 'required|max:11|min:11',
    		'NID' => 'required|max:14|min:14',
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
    			$row->password 	= hash::make($request->input('pass'));
    			$row->name 		= $request->input('name');
    			$row->phone 	= $request->input('phone');
    			$row->nationalID= $request->input('NID');
    			$row->gender 	=$request->input('gender');

    			$row->save();

    			Session::flash('done','new User has been added');


    		}catch(\Exception $e){
    			Session::flash('err','National ID or email exists');
    		}
    		return Redirect::back();
    	}
    }
// ----------------------------------------------------------------------------------
//edit
    public function edit($id)
    {

        if(User::find($id)){
            $user = User::find($id);
            return view('backEnd.users.edit')->withAct('users')
                                        ->withUser($user);
        }else{
            Session::flash('err','No such ID');
            return Redirect::to('dashboard/users');
        }
        
    }

    public function update($id,Request $request)
    {
    	Validator::make($request->all(),[
    		'email' => 'required|max:100',
    		'pass' => '',
    		'name' => 'required|max:100',
    		'phone' => 'required|max:11|min:11',
    		'NID' => 'required|max:14|min:14',
    		'gender' => 'required'
    	],[
    		'NID' => 'National ID is required with 14 char max'
    	])->validate();

    	if(isset($errors) && count($errors) > 0){
    		return Redirect::back();
    	}else{
    		try{
    			$row =  User::find($id);
    			$row->email 	= $request->input('email');

    			if( !empty($request->input('pass')) )
    				$row->password 	= hash::make($request->input('pass'));
    			
    			$row->name 		= $request->input('name');
    			$row->phone 	= $request->input('phone');
    			$row->nationalID= $request->input('NID');
    			$row->gender 	=$request->input('gender');

    			$row->save();

    			Session::flash('done','User has been updated');


    		}catch(\Exception $e){
    			Session::flash('err','National ID or email exists');
    		}
    		return Redirect::back();
    	}
    }
// -----------------------------------------------------------------------------------

//delete
    public function delete(Request $request)
    {
    	$id = $request->input('id');
    	try{
    		User::find($id)->delete();
    		Session::flash('done','User Deleted');
    	}catch(\Exception $e){
    		Session::flash('err',$e->getMessage());
    	}

    	return Redirect::back();
    }
}
