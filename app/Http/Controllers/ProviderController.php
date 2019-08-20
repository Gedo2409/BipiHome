<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Condition;
use App\Category;
use App\Pic;
use App\Provider;
use App\User;
use App\Role;
use App\Service;
use Image;
use File;
use Validator;

class ProviderController extends Controller
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
		$providers = Provider::all();
		return view('backend.providers.index', ['providers' => $providers]);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('backend.providers.create', [
			'users' => User::all(),
			'conditions' => Condition::all(),
			'categories' => Category::all()
		]);
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		$input = $request->all();
		//dd( $input );

		$rules = [
			'logo_path' => 'mimes:jpeg,png,jpg|max:400',
			'phone' => 'required',
			//'email' => 'required',
			//'street' => 'required',
			//'neighborhood' => 'required',
			//'city' => 'required',
			//'postal_code' => 'required',
			//'works_array' => 'required'
		];


		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$p = new Provider($input);
			//dd( $p );
			//Guardar Imagen
			$p->user_id = Auth::id();
			if ($request->logo_path != null) {
				$file = Input::file('logo_path');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$p->logo_path = 'img/provider_logos/'.$file_name;
				$request->logo_path->move('img/provider_logos/', $file_name);
			}
			$p->save();

			foreach ($input['conditions'] as $condition_id) {
				$c = Condition::find($condition_id);
				$p->conditions()->sync($c, false);
			}
			//dd($p->conditions);

			//Imágen 1 de works
			if ($request->img1 != null) {
				$file = Input::file('img1');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt1 ? $request->txt1 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img1->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 2 de works
			if ($request->img2 != null) {
				$file = Input::file('img2');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt2 ? $request->txt2 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img2->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 3 de works
			if ($request->img3 != null) {
				$file = Input::file('img3');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt3 ? $request->txt3 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img3->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 4 de works
			if ($request->img4 != null) {
				$file = Input::file('img4');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt4 ? $request->txt4 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img4->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 5 de works
			if ($request->img5 != null) {
				$file = Input::file('img5');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt5 ? $request->txt5 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img5->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}

			return redirect()->route('providers.index');
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
		$p = Provider::find($id);
		return view('backend.providers.show', ['provider' => $p]);
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$p = Provider::find($id);
		return view('backend.providers.edit', ['users' => User::all(),'conditions' => Condition::all(), 'provider' => $p, 'services' => Service::where('provider_id', $id), 'categories' => Category::all()]);
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
		//dd($request->all());
		$input = $request->all();
		//dd($input);
		$rules = [
			//'logo_path' => 'mimes:jpeg,png,jpg|max:400',
			'phone' => 'required',
			//'email' => 'required',
			//'street' => 'required',
			//'neighborhood' => 'required',
			//'city' => 'required',
			//'postal_code' => 'required',
			//'works_array' => 'required'
		];


		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$p = Provider::find($id);
			$p->update($input);
			if (Input::file('logo_path')) {
				// Eliminar imagen vieja
				$oldfile = public_path($p->logo_path);
				File::delete($oldfile);
				$p->delete();
				//Guardar Imagen nueva
				$file = Input::file('logo_path');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$p->logo_path = 'img/provider_logos/'.$file_name;
				$request->logo_path->move('img/provider_logos/', $file_name);
			}
			$p->save();

			if ($input['conditions']) {
				$p->conditions()->sync($input['conditions']);
			}
			//Imágen 1 de works
			if ($request->img1 != null) {
				$file = Input::file('img1');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt1 ? $request->txt1 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img1->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 2 de works
			if ($request->img2 != null) {
				$file = Input::file('img2');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt2 ? $request->txt2 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img2->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 3 de works
			if ($request->img3 != null) {
				$file = Input::file('img3');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt3 ? $request->txt3 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img3->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 4 de works
			if ($request->img4 != null) {
				$file = Input::file('img4');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt4 ? $request->txt4 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img4->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}
			//Imágen 5 de works
			if ($request->img5 != null) {
				$file = Input::file('img5');
				$file_name = str_random(16).'.'.$file->getClientOriginalExtension();
				$pic = new Pic;
				$pic->description = ($request->txt5 ? $request->txt5 : null);
				$pic->path = 'img/provider_works/'.$file_name;
				$request->img5->move('img/provider_works/', $file_name);
				$p->pics()->save($pic);
			}

		}

		//$result = $p->isValid();
		//dd( $p );
		return redirect()->route('providers.index');
	}


	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$p = Provider::find($id);
		// Eliminar imagen de fondo
		$oldfile = public_path($p->logo_path);
		File::delete($oldfile);
		$p->delete();

		// Eliminar todas las imagenes relacionadas
		$pics = Pic::where('provider_id', $p->id)->get();
		foreach ($pics as $pi) {
			$file = $pi->path;
			$filename = public_path($file);
			File::delete($filename);
			$pi->delete();
		}

		$p->delete();
		return redirect()->route('providers.index');
	}
	public function toggleActive($id)
	{
		$p = Provider::find($id);
	  $p->active = ($p->active ? false : true);
		$p->save();
		return redirect()->back();
	}
	public function upgradeUserToProvider(Request $request)
	{
		$u = User::find($request->user_id);
		$p = new Provider([
			'phone' => $request->phone,
			'user_id' => $request->user_id
		]);
		$rc = Role::where('name', 'customer')->first();
		$rp = Role::where('name', 'provider')->first();
		$u->detachRole($rc);
		$u->attachRole($rp);
		//dd($u->role );
		$p->save();
		return redirect()->route('providers.edit', ['provider' => $p->id]);
	}
	public function reviews($id)
	{
		return view('backend.reviews', ['provider' => Provider::find($id)]);	
	}
}
