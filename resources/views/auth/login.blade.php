@extends('frontend.layouts.app')

@section('content')
	<div class="container">
	    
		<div class="row justify-content-center align-items-center h100">
		    <div class="col text-center">
        <a href="http://www.bipihome.com">  <img src="{{ asset('img/logotodaspartes.jpg') }}" height="150" width="100"></a>
        </div>
			<div class="col-12 col-md-6">
				<div class="panel panel-default">
					{{-- <div class="panel-heading">Inicio de Sesión</div> --}}
					<h1 class="mont pt-3 mt-5">Inicio de Sesión</h1>
					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							@if (Request::has('previous'))
								<input type="hidden" name="previous" value="{{ Request::get('previous') }}">
							@else
								<input type="hidden" name="previous" value="{{ URL::previous() }}">
							@endif
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email" class="col-md-4 control-label">Correo Electrónico</label>
										
								<div class="col-md-6">
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password" class="col-md-4 control-label">Contraseña</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control" name="password" required>

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
										</label>
									</div>
								</div>
							</div>
                                    
							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Inicio de Sesión
									</button>
                                                
									<a class="btn btn-link" href="{{ route('password.request') }}">
										¿Olvidaste tu contraseña?
									</a>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
			{{-- <div class="row h100 align-items-center justify-content-center py-5"> --}}
				<div class="col-12 col-md-6 text-center">
				{{-- <div class="row py-5">
					<div class="col text-center">
					<img src="{{ asset('img/logo_black.png') }}" alt="">
					</div>
				</div> --}}
				<h1 class="mont">¿No tienes cuenta?</h1>
				{{-- <form class="form-horizontal" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}

					<div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="control-label">Nombre</label>
						<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

						@if ($errors->has('name'))
							<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>

					<div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="control-label">Correo Electrónico</label>
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>

					<div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="control-label">Contraseña</label>
						<input id="password" type="password" class="form-control" name="password" required>

						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>

					<div class="col-md-12 form-group">
						<label for="password-confirm" class="control-label">Confirmar constraseña</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
					</div>

					<div class="col-md-12 form-group"> --}}
					<a href="{{route('register')}}">
							<button type="submit" class="btn btn-primary mt-3">
								Registrate
							</button>
						</a>
					{{-- </div>
				</form> --}}
				</div>
			{{-- </div> --}}
		</div>
	</div>
@endsection
