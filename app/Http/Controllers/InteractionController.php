<?php

namespace App\Http\Controllers;

use App\Interaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\Provider;
use App\Customer;
use Carbon\Carbon;

class InteractionController extends Controller
{

	private $prefix = 'interactions.'; // Para Rutas
	private $viewPrefix = 'backend.interactions.'; // Para Vistas

	public function __construct(){
		$this->middleware('auth');
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(){
		return view($this->viewPrefix.'index', ['interactions' => Interaction::all()]);
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
			'display_name' => 'required|max:255',
			//'image_path' => 'max:800'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$m = new Interaction;
			$m->fill($request->all());
			$m->name = str_slug($request->input('display_name'));
			$m->save();
			return redirect()->route($this->prefix.'index');
		}
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Interaction  $category
	* @return \Illuminate\Http\Response
	*/
	public function show($id){
		return view($this->viewPrefix.'show', ['i' => Interaction::find($id)]);
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Interaction  $category
	* @return \Illuminate\Http\Response
	*/
	public function edit($id){
		return view($this->viewPrefix.'edit', ['i' => Interaction::find($id)]);
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Interaction  $category
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id){

		// dd($request->all());
		$input = $request->all();

		$rules = [
			'display_name' => 'required|max:255',
			//'image_path' => 'max:800'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$m = Interaction::find($id);
			$m->update($request->all());
			$m->name = str_slug($request->input('display_name'));
			$m->save();
			return redirect()->route($this->prefix.'index');
		}
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Interaction  $category
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id){
		$m = Interaction::find($id);
		$m->delete();
		return redirect()->route($this->prefix.'index');
	}
	
	public function createInteraction($customer_id, $provider_id, $interaction_id)
	{
		$provider = Provider::find($provider_id);
		$customer = Customer::find($customer_id);
		$interaction = Interaction::find($interaction_id);
		$provider->customers()->save($customer, ['interaction_type' => $interaction->id, 'created_at' => Carbon::now()]);

		return redirect()->back();
	}
}
