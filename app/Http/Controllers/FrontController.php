<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Category;
use App\Condition;
use App\SubscriptionType;
use Session;
use App\Events\CustomerClickedProviderEvent;
use App\Events\CustomerContactedProviderEvent;
use App\Events\CategorySearchedEvent;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['only' => 'providerInfo']);
  }
  public function index(){
    return view('frontend.index' , [
      'providers' => Provider::all(),
      'categories' => Category::all()
    ]);
  }

  public function buscar(Request $request)
  {
    $input = $request->all();
    //dd($input);
    $providers = Provider::where('category_id',$input['cat_id'])->get();
    event(new CategorySearchedEvent(Category::find($input['cat_id'])));
    return view('frontend.resultados',[
      'providers' => $providers,
      'conditions' => Condition::all(),
      'category' => Category::find($input['cat_id'])
    ]);
  }

  public function precios(){
    return view('frontend.precios', ['sub_types' => SubscriptionType::all()]);
  }
  
  public function proveedor($id)
  {
    $p = Provider::find($id);
    if (!Session::has('provider_info')) { // Si la sesión NO tiene provider_info
      event(new CustomerClickedProviderEvent($p)); // Se dispara el evento de visita (esto evita duplicados al recargar la página)
    }
    return view('frontend.proveedor',[
      'p' => $p,
      'conditions' => Condition::all()
    ]);
  }

  public function providerInfo($id)
  {
    $p = Provider::find($id);
    Session::flash('provider_info','Excelente');
    if (Auth::user()->profile != null) { // Si tiene profile (osea, si es customer)
      event(new CustomerContactedProviderEvent(Auth::user()->profile->id, $p->id)); // Crea el evento
    }
    return redirect()->back();
  }
  public function contacto()
  {
    return view('frontend.contacto');
  }
  public function terminos()
  {
    return view('frontend.terminos');
  }
  public function acerca()
  {
    return view('frontend.acerca');
  }
}
