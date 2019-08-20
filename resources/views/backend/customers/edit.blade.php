@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row">
		<div class="col p-5">
			<h2 class="mont bold text-muted">
				Editar datos de Proveedor de Servicios
			</h2>
			<a href="{{ route('back.index') }}">
				<button class="btn btn-warning">Volver</button>
			</a>
			<a href="{{ url('password/reset') }}">
				<button class="btn btn-warning">Reestablecer contraseña</button>
			</a>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col px-5">
			<form action="{{ route('customers.update', $c->id) }}" method="POST" class="formulario-articulo" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT" />
				<div class="row justify-content-center">
					
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					
					<div class="col-12 col-md-10 py-4">
						<label>Teléfono</label>
						<input class="form-control" type="text" name="phone" value="{{ $c->phone }}" required>
					</div>
					
					<div class="col-12 col-md-10 py-4">
						<label>Email</label>
						<input class="form-control" type="text" name="email" value="{{ $c->email }}" required email>
					</div>
					
					<div class="col-12 col-md-10 py-4">
						<label>Calle</label>
						<input class="form-control" type="text" name="street" value="{{ $c->street }}" required>
					</div>
					
					<div class="col-12 col-md-10 py-4">
						<label>Colonia</label>
						<input class="form-control" type="text" name="neighborhood" value="{{ $c->neighborhood }}" required>
					</div>
					
					<div class="col-12 col-md-10 py-4">
						<label>Ciudad</label>
						<input class="form-control" type="text" name="city" value="{{ $c->city }}" required>
					</div>
					
					<div class="col-12 col-md-10 py-4">
						<label>Código Postal</label>
						<input class="form-control" type="text" name="postal_code" value="{{ $c->postal_code }}" required>
					</div>
					
				</div>
				
				<div class="row justify-content-center">
					<button class="btn btn-rectangle btn-raised" type="submit" id="submit">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection