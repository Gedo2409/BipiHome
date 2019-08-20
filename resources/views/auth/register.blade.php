@extends('frontend.layouts.app')

@section('content')
<section>
  <div class="row h100 align-items-center justify-content-center py-5">
    <div class="col-md-5 col-lg-4 py-5">
      <div class="row py-5">
        <div class="col text-center">
        <a href="http://www.bipihome.com">  <img src="{{ asset('img/logotodaspartes.jpg') }}" height="150" width="100"></a>
        </div>
      </div>
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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
              <label for="email" class="control-label">E-Mail</label>
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

          <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
          </div>
      </form>
    </div>
  </div>
</section>
@endsection
