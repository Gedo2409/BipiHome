<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Banner;
use App\Provider;
use Validator;
use Image;
use File;

class BannerController extends Controller
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
		return view('backend.banners.index', ['banners' => Banner::all()]);

	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('backend.banners.create', ['providers' => Provider::all()]);
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{

		// dd($request->all());
		$input = $request->all();

		$rules = [
			// 'name' => 'unique:subcategories|required|max:255',
			// 'display_name' => 'max:255',
			'image_path' => 'max:800'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = new Banner;
			$b->fill($request->all());
			// imagen
			if ($request->image_path != null) {
				$file = Input::file('image_path');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$b->image_path = Banner::$image_path.$file_name;
				$request->image_path->move(Banner::$image_path, $file_name);
			}
			$b->save();
			return redirect()->route('backend.banners.index');
		}
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function show($id)
	{
		return view('backend.banners.show', ['b' => Banner::find($id)]);

	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		return view('backend.banners.edit', ['b' => Banner::find($id), 'providers' => Provider::all()]);
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id)
	{

		// dd($request->all());
		$input = $request->all();

		$rules = [
			// 'name' => 'unique:subcategories|required|max:255',
			// 'display_name' => 'max:255',
			'image_path' => 'max:800'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = Banner::find($id);
			$b->update($request->all());
			// imagen
			if ($request->image_path != null) {
				// Eliminar imagen
				$oldfile = public_path($b->image_path);
				File::delete($oldfile);
				//Guardar nueva imagen
				$file = Input::file('image_path');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$b->image_path = Banner::$image_path.$file_name;
				$request->image_path->move(Banner::$image_path, $file_name);
			}
			$b->save();
			return redirect()->route('backend.banners.index');
		}
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$b = Banner::find($id);
		// Eliminar imagen 1
		$oldfile = public_path($b->image_path);
		File::delete($oldfile);
		$b->delete();
		return redirect()->route('backend.banners.index');

	}
}
