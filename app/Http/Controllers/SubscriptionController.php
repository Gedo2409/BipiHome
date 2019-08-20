<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Provider;
use App\User;
use App\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
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
		return view('backend.subscriptions.index', ['subscriptions' => Subscription::all()]);
	}
	
	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('backend.suscriptions.create');
		
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
			// 'user_id' => 'required|in:'.Auth::user()->id
			// 'name' => 'unique:subcategories|required|max:255',
			// 'display_name' => 'max:255'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = new Suscription;
			$b->fill($request->all());
			$b->save();
			return redirect()->route('backend.suscriptions.index');
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
		return view('backend.suscriptions.show', ['s' => Suscription::find($id)]);
		
	}
	
	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		return view('backend.suscriptions.show', ['s' => Suscription::find($id)]);
		
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
			// 'display_name' => 'max:255'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = Suscription::find($id);
			$b->update($request->all());
			$b->save();
			return redirect()->route('backend.suscriptions.index');
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
		$b = Suscription::find($id);
		$b->delete();
		return redirect()->route('backend.suscription.index');
	}
	public function asignarSubscripcion($subscriptionType_id)
	{
		//dd('User Name: '.Auth::user()->name.' | Role: '.Auth::user()->role->first()->name.' | Sub id: '.$subscriptionType_id);
		$sub = new Subscription();
		$provider = new Provider();
		$provider->user_id = Auth::user()->id;
		$provider->phone = '0000000';
		$provider->save();
		$sub->provider_id = Auth::user()->provider->id;
		$sub->subscription_type_id = Auth::user()->provider->id;
		$sub->subscription_start = Carbon::now();
		$sub->subscription_end = Carbon::now()->addMonths(1);
		$sub->autorenew = true;
		//dd($sub);
		
		return redirect()->route('providers.edit', $provider->id);
		// return view('front.dashboard.dashboard');
	}
}
