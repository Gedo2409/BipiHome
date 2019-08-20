<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Condition;
use App\Provider;
use App\SubscriptionType;
use Image;
use File;
use Validator;

class DashboardController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function dashboard()
  {
    return view('backend.dashboard.dashboard');
  }
  public function informacion()
  {
    return view('backend.dashboard.informacion', ['conditions' =>  Condition::all()]);
  }
  public function servicios()
  {
    return view('backend.dashboard.servicios');
  }
  public function ordenes()
  {
    return view('backend.dashboard.ordenes');
  }
  public function notificaciones()
  {
    return view('backend.dashboard.notificaciones');
  }
  public function estadisticas()
  {
    return view('backend.dashboard.estadisticas', ['provider' => Provider::all()]);
  }
  public function ajustes()
  {
    return view('backend.dashboard.ajustes');
	}
  public function confirmarCompra($subscriptionType_id)
  {
    return view('backend.dashboard.confirmacion' , ['sub' => SubscriptionType::find($subscriptionType_id)]);
  }
  public function formaPago($subscriptionType_id)
  {
    return view('backend.dashboard.formaPago' , ['sub' => SubscriptionType::find($subscriptionType_id)]);
  }
  public function providerUpdate(Request $request, $id)
	{
		//dd($request->all(), $id);
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
		return redirect()->route('back.index');
	}
}
