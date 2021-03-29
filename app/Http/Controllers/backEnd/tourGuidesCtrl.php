<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tourGuide;
use App\location;
use Validator;
use Session;
use Redirect;

class tourGuidesCtrl extends Controller
{
    public function index()
    {	
    	if( isset($_GET['search']) ){
    		$tourGuides = tourGuide::where('name','LIKE','%'.$_GET['search'].'%')->get();
    	}else{
    		$tourGuides = tourGuide::get();
    	}
    	return view('backEnd.tourGuides.index')
    										->withAct('tourGuides')
    										->withTourGuides($tourGuides);
    }
//add
    public function add()
    {
    	$locations = location::get();
    	return view('backEnd.tourGuides.add')
    										->withAct('tourGuides')
    										->withLocations($locations);
    }

    public function doAdd(Request $request)
    {
    	Validator::make($request->all(),[
    		'address' => 'required|max:50',
    		'name' => 'required|max:20',
    		'NID' => 'required|max:14|min:14',
    		'gender' => 'required',
    		'location' => 'required'
    	],[
    		'NID' => 'National ID is required with 14 char max'
    	])->validate();

    	if(isset($errors) && count($errors) > 0){
    		return Redirect::back();
    	}else{
    		try{
    			$row = new tourGuide;
    			$row->address 	= $request->input('address');
    			$row->name 		= $request->input('name');
    			$row->nationalID= $request->input('NID');
    			$row->gender 	=$request->input('gender');
    			$row->locID		= $request->input('location');
    			$row->rate 		= 0;
    			$row->save();

    			Session::flash('done','new tour Guide has been added');


    		}catch(\Exception $e){
    			Session::flash('err',$e->getMessage());
    		}
    		return Redirect::back();
    	}
    }
// ---------------------------------------------------------------------------------
//edit
    public function edit($id)
    {
    	if(tourGuide::find($id)){
            $tourGuide = tourGuide::find($id);
            return view('backEnd.tourGuides.edit')->withAct('tourGuides')
                                        ->withTourGuide($tourGuide);
        }else{
            Session::flash('err','No such ID');
            return Redirect::to('dashboard/tourGuides');
        }
    }


    public function update($id,Request $request)
    {
    	Validator::make($request->all(),[
    		'address' => 'required|max:50',
    		'name' => 'required|max:20',
    		'NID' => 'required|max:14|min:14',
    		'gender' => 'required',
    		'location' => 'required'
    	],[
    		'NID' => 'National ID is required with 14 char max'
    	])->validate();

    	if(isset($errors) && count($errors) > 0){
    		return Redirect::back();
    	}else{
    		try{
    			$row =  tourGuide::find($id);
    			$row->address 	= $request->input('address');
    			$row->name 		= $request->input('name');
    			$row->nationalID= $request->input('NID');
    			$row->gender 	=$request->input('gender');
    			$row->locID		= $request->input('location');
    			$row->save();

    			Session::flash('done','tour Guide has been updated');


    		}catch(\Exception $e){
    			Session::flash('err','National ID mabye exists');
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
    		tourGuide::find($id)->delete();
    		Session::flash('done','tour Guide Deleted');
    	}catch(\Exception $e){
    		Session::flash('err',$e->getMessage());
    	}

    	return Redirect::back();
    }
}
