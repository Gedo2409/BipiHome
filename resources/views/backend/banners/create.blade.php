@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row">
		<div class="col p-5">
			<h2 class="mont bold text-muted">
				Crear Banner
			</h2>
			<a href="{{ route('banners.index') }}">
				<button class="btn btn-warning">Volver</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col px-5">
			<form action="{{ route('banners.store') }}" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-12 col-md-6 py-2 form-group">
						<label>Titulo</label>
						<input class="form-control form-control-lg" type="text" name="title" value="{{ old('title') }}" required>
						@if ($errors->has('title'))
						<span class="help-block">
							<strong>{{ $errors->first('title') }}</strong>
						</span>
						@endif
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">Imagen del banner</label>
						</div>

						@if ($errors->has('image_path'))
						<span class="help-block">
							<strong>{{ $errors->first('image_path') }}</strong>
						</span>
						@endif
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<select class="custom-select custom-select mb-3" name="provider_id">
							<option selected>Selecciona al proveedor</option>
							@foreach ($providers as $p)
							<option value="{{ $p->id }}">{{ $p->name }}</option>
							@endforeach
						</select>
						@if ($errors->has('provider_id'))
						<span class="help-block">
							<strong>{{ $errors->first('provider_id') }}</strong>
						</span>
						@endif
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
