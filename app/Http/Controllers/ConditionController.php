<?php

namespace App\Http\Controllers;

use App\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class ConditionController extends Controller
{

	private $prefix = 'conditions.'; // Para Rutas
	private $viewPrefix = 'backend.conditions.'; // Para Vistas

	public function __construct(){
		$this->middleware('auth');
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(){
		return view($this->viewPrefix.'index', ['conditions' => Condition::all()]);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create(){
		return view($this->viewPrefix.'create');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request){

		// dd($request->all());
		$input = $request->all();

		$rules = [
			// 'name' => 'unique:subconditions|required|max:255',
			'display_name' => 'required|max:255',
			//'image_path' => 'max:800'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$m = new Condition;
			$m->fill($request->all());
			$m->name = str_slug($request->input('display_name'));
			$m->save();
			return redirect()->route($this->prefix.'index');
		}
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Condition  $category
	* @return \Illuminate\Http\Response
	*/
	public function show($id){
		return view($this->viewPrefix.'show', ['c' => Condition::find($id)]);
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Condition  $category
	* @return \Illuminate\Http\Response
	*/
	public function edit($id){
		return view($this->viewPrefix.'edit', ['c' => Condition::find($id)]);
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Condition  $category
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id){

		// dd($request->all());
		$input = $request->all();

		$rules = [
			// 'name' => 'unique:subconditions|required|max:255',
			'display_name' => 'required|max:255',
			//'image_path' => 'max:800'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$m = Condition::find($id);
			$m->update($request->all());
			$m->name = str_slug($request->input('display_name'));
			$m->save();
			return redirect()->route($this->prefix.'index');
		}
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Condition  $category
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id){
		$m = Condition::find($id);
		$m->delete();
		return redirect()->route($this->prefix.'index');
	}
}
