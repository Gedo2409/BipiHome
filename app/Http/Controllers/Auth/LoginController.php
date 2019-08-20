<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	* Where to redirect users after login.
	*
	* @var string
	*/
	protected $redirectTo = '/backend';

	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct(Request $request)
	{
		$this->middleware('guest')->except('logout');
		$this->request = $request;
		//dd( $request );

	}

	public function redirectTo()
	{
		// if ($this->request->has('previous')) {
		// 	$this->redirectTo = $this->request->get('previous');
		// } else {
		// 	dd('No previous');
		// 	$this->redirectTo = '/backend';
		// }
		//  dd('end: '.$this->redirectTo);
		// return $this->redirectTo ?? $redirectTo;
		// return $this->redirectTo;
		// return $this->request->get('previous');
	}
	public function authenticated()
	{
		return redirect($this->request->get('previous'));
	}
}
