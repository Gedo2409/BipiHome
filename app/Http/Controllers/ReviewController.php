<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Customer;
use App\Provider;
use Validator;

class ReviewController extends Controller
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
		return view('backend.reviews.index', ['reviews' => Review::all()]);

	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('backend.reviews.index', ['customers' => Customer::all(), 'providers' => Provider::all()]);

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
			$b = new Review;
			$b->fill($request->all());
			$b->save();
			return redirect()->route('backend.reviews.index');
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
		return view('backend.reviews.show', ['r' => Review::find($id)]);

	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		return view('backend.reviews.edit', ['r' => Review::find($id), 'customers' => Customer::all(), 'providers' => Provider::all()]);

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
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = Review::find($id);
			$b->update($request->all());
			$b->save();
			return redirect()->route('backend.reviews.index');
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
		$b = Review::find($id);
		$b->delete();
		return redirect()->route('backend.reviews.index');
	}
	public function toggleApproved($id)
	{
		$r = Review::find($id);
	  $r->is_approved = ($r->is_approved ? false : true);
		$r->save();
		return redirect()->back();
	}
	public function saveCustomerReview(Request $request)
	{

		// dd($request->all());
		$input = $request->all();

		$rules = [
			'grade' => 'required|numeric|between:0,5',
			'review' => 'required|max:255',
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = new Review;
			$b->fill($request->all());
			$b->is_approved = true;
			$b->save();
			return redirect()->route('front.proveedor', $input['provider_id']);
		}
	}
}
