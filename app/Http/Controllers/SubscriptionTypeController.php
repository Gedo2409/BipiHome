<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubscriptionType;
use Validator;

class SubscriptionTypeController extends Controller
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
		$st = SubscriptionType::all();
		return view('backend.suscriptionTypes.index', ['st' => $st]);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('backend.suscriptionTypes.create');

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
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = new SuscriptionType;
			$b->fill($request->all());
			$b->save();
			return redirect()->route('backend.suscriptionTypes.index');
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
		return view('backend.suscriptionTypes.show', ['s' => SubscriptionType::find($id)]);

	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		return view('backend.suscriptionTypes.edit', ['s' => SubscriptionType::find($id)]);
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
				$b =  SubscriptionType::find($id);
				$b->update($request->all());
				$b->save();
				return redirect()->route('subscription_types.index');
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
		$b = SuscriptionType::find($id);
		$b->delete();
		return redirect()->route('subscription_types.index');

	}
}
