@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row">
		<div class="col p-5">
			<h2 class="mont bold text-muted">
				Crear suscripción
			</h2>
			<a href="{{ route('subscription_types.index') }}">
				<button class="btn btn-warning">Volver</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col px-5">
			<form action="{{ route('subscription_types.store') }}" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-12 col-md-6 py-2 form-group">
						<label>Nombre</label>
						<input class="form-control" type="text" name="display_name" value="{{ old('display_name') }}" required>
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Descripción</label>
						<input class="form-control" type="text" name="description" value="{{ old('description') }}" required>
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Precio</label>
						<input class="form-control" type="text" name="price" value="{{ old('icon') }}" required>
					</div>
				</div>

				<div class="row">
					<div class="col-3 text-center">
						<button class="btn bg-azul text-white" type="submit" id="submit">Crear</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
