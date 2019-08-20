<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Customer;
use App\User;

class CustomerController extends Controller
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
		return view('backend.customers.index', ['customers' => Customer::all()]);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('backend.customers.create', ['users' => User::all()]);
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
			$b = new Customer;
			$b->fill($request->all());
			$b->save();
			return redirect()->route('backend.customers.index');
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
		return view('backend.customers.show', ['c' => Customer::find($id)]);

	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		return view('backend.customers.edit', ['c' => Customer::find($id), 'users' => User::all()]);

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
			$b = Customer::find($id);
			$b->update($request->all());
			$b->save();
			return redirect()->route('back.index');
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
		$b = Customer::find($id);
		$b->delete();
		return redirect()->route('backend.suscriptionTypes.index');

	}
	public function reviews($id)
	{
		return view('backend.reviews', ['customer' => Customer::find($id)]);	
	}

	public function favoritos ($id)
	{
		return view('backend.customers.favoritos', ['customer' => Customer::find($id)]);
	}
	
	public function downgradeUserToCustomer(Request $request)
	{
		$u = User::find($request->user_id);

		$rc = Role::where('name', 'customer')->first();
		$rp = Role::where('name', 'provider')->first();
		$u->detachRole($rp);
		$u->attachRole($rc);
		//dd($u->role );
		return redirect()->route('customers.show', ['c' => Customer::find($u->profile->id)]);
	}
}
