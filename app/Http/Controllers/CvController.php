<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UpLoadedFile;
use App\Cv;
use App\Http\Requests\cvRequest;
use auth;

class CvController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	//lister les cv
    public function index()
    {
    	$listcv =Auth::user()->cvs;
    	return view('cv.index',['cvs'=>$listcv]);
    }
    //affich le formulair de creation de cv
    public function create()
    {
    	return view('cv.create');
    }
    //save cv
    public function store( cvRequest $Request)
    {
    	$cv = new Cv();

    	$cv->titre =$Request->input('titre');
    	$cv->presentation =$Request->input('presentation');
    	$cv->user_id =auth::user()->id;
    	if ($Request->hasFile('photo')) {
    		$cv->photo = $Request->photo->store('image');
    	}
    	


    	$cv->save();
    	session()->flash('suc','saved');

    	return redirect('cvs');
    }
    //recuperer un cv et le metre dans un form
    public function edit($id)
    {
    	$cv=Cv::find($id);
    	return view('cv.edit',['cv'=>$cv]);	
    }
    //update cv
    public function update(cvRequest $Request,$id)
    {
    	$cv=Cv::find($id);
    	$cv->titre =$Request->input('titre');
    	$cv->presentation =$Request->input('presentation');
    	if ($Request->hasFile('photo')) {
    		$cv->photo = $Request->photo->store('image');
    	}
    		
    	$cv->save();
    	session()->flash('upd','updated');
    	return redirect('cvs');
    }
    //delete cv
    public function destroy(Request $Request,$id)
    {
    	$cv=Cv::find($id);
    	$cv->delete();
    	return redirect('cvs');
    }
}
