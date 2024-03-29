<?php

namespace App\Http\Controllers;

use App\Pic;
use Illuminate\Http\Request;
use Image;
use File;

class PicController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		//
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		//
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		//
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Pic  $pic
	* @return \Illuminate\Http\Response
	*/
	public function show(Pic $pic)
	{
		//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Pic  $pic
	* @return \Illuminate\Http\Response
	*/
	public function edit(Pic $pic)
	{
		//
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Pic  $pic
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Pic $pic)
	{
		//
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Pic  $pic
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$pic = Pic::find($id);
		$file = $pic->path;
		$filename = public_path($file);
		File::delete($filename);
		$pic->delete();
		return redirect()->back();
	}
}
