@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row">
		<div class="col p-5">
			<h2 class="mont bold text-muted">
				Editar información
			</h2>
		</div>
	</div>
	<div class="row">
		<div class="col px-5">
			<form action="{{ route('customer.actualizar', Auth::user()->provider->id) }}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT" />
				{{ csrf_field() }}
				<div class="row">
					<div class="col-12">
						<h6 class="text-muted mont bold">Información del negocio</h6>
					</div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Nombre del negocio</label>
						<input class="form-control" type="text" name="name" value="{{ Auth::user()->provider->name }}" required>
						@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Descripción del negocio</label>
						<input class="form-control" type="text" name="description" value="{{ Auth::user()->provider->description }}" required>
						@if ($errors->has('description'))
						<span class="help-block">
							<strong>{{ $errors->first('description') }}</strong>
						</span>
						@endif
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label for="">Logo</label>
						@if (Auth::user()->provider->logo_path != null)
							<div class="py-2">
								<img src="{{ asset(Auth::user()->provider->logo_path) }}" alt="">
							</div>
						@endif
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="logo_path" id="customFile">
							<label class="custom-file-label" for="customFile">Elegir imagen</label>
						</div>
						@if ($errors->has('logo_path'))
						<span class="help-block">
							<strong>{{ $errors->first('logo_path') }}</strong>
						</span>
						@endif
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Teléfono</label>
						<input class="form-control" type="text" name="phone" value="{{ Auth::user()->provider->phone }}" required>
						@if ($errors->has('phone'))
						<span class="help-block">
							<strong>{{ $errors->first('phone') }}</strong>
						</span>
						@endif
					</div>


					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Calle</label>
						<input class="form-control" type="text" name="street" value="{{ Auth::user()->provider->street }}" required>
						@if ($errors->has('street'))
						<span class="help-block">
							<strong>{{ $errors->first('street') }}</strong>
						</span>
						@endif
					</div>

					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Colonia</label>
						<input class="form-control" type="text" name="neighborhood" value="{{ Auth::user()->provider->neighborhood }}" required>
						@if ($errors->has('neighborhood'))
						<span class="help-block">
							<strong>{{ $errors->first('neighborhood') }}</strong>
						</span>
						@endif
					</div>
					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Ciudad</label>
						<input class="form-control" type="text" name="city" value="{{ Auth::user()->provider->city }}" required>
						@if ($errors->has('city'))
						<span class="help-block">
							<strong>{{ $errors->first('city') }}</strong>
						</span>
						@endif
					</div>
					<div class="w-100"></div>

					<div class="col-12 col-md-6 py-2 form-group">
						<label>Código Postal</label>
						<input class="form-control" type="text" name="postal_code" value="{{ Auth::user()->provider->postal_code }}" required>
						@if ($errors->has('postal_code'))
						<span class="help-block">
							<strong>{{ $errors->first('postal_code') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">
						<h6 class="mont bold">Imágenes de trabajo</h6>
						@if (Auth::user()->provider->pics->count() > 0)
							@foreach (Auth::user()->provider->pics as $pp)
								<div class="row align-items-center py-3">
									<div class="col-12 col-md-3">
										<label for="">Imagen {{ $loop->iteration }}</label><br>
										<img src="{{ asset($pp->path)}}" width="200px" alt="">
										<br>

									</div>
									<div class="col-12 col-md-6 form-group">
										<label>Descripción</label>
										<input class="form-control" type="text" name="txt1" value="{{ $pp->description }}">
										@if ($errors->has('txt1'))
										<span class="help-block">
											<strong>{{ $errors->first('txt1') }}</strong>
										</span>
										@endif
									</div>
								</div>
							@endforeach
							@for ($i = 1; $i < 6-Auth::user()->provider->pics->count(); $i++)
								<div class="row align-items-start">
									<div class="col-12 col-md-6">
										<label for="">Imagen {{ $i }}</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="img{{ $i }}" id="customFile">
											<label class="custom-file-label" for="customFile">Elegir imagen</label>
										</div>
									</div>
									<div class="col-12 col-md-6 form-group">
										<label>Descripción</label>
										<input class="form-control form-control-lg" type="text" name="txt{{ $i }}" value="{{ old('txt'.$i) }}">
										@if ($errors->has('txt'.$i))
										<span class="help-block">
											<strong>{{ $errors->first('txt'.$i) }}</strong>
										</span>
										@endif
									</div>
								</div>
							@endfor
						@else
							@for ($i = 1; $i < 6; $i++)
								<div class="row align-items-start">
									<div class="col-12 col-md-6">
										<label for="">Imagen {{ $i }}</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="img{{ $i }}" id="customFile">
											<label class="custom-file-label" for="customFile">Elegir imagen</label>
										</div>
									</div>
									<div class="col-12 col-md-6 form-group">
										<label>Descripción</label>
										<input class="form-control form-control-lg" type="text" name="txt{{ $i }}" value="{{ old('txt'.$i) }}">
										@if ($errors->has('txt'.$i))
										<span class="help-block">
											<strong>{{ $errors->first('txt'.$i) }}</strong>
										</span>
										@endif
									</div>
								</div>
							@endfor
						@endif
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">
						<h6 class="text-muted mont bold">
							Características del negocio
						</h6>
					</div>
					@foreach ($conditions as $cond)
						<div class="col-3 py-2">
							<input type="checkbox" name="conditions[]" value="{{ $cond->id }}" class="form-check-input" {{ Auth::user()->provider->conditions->contains($cond->id) ? 'checked' : '' }}>
							<label class="" for="{{$cond->name}}">{{$cond->display_name}}</label>
						</div>
					@endforeach

				</div>

				<div class="row py-5">
					<div class="col-3 text-center">
						<button class="btn bg-azul text-white" type="submit" id="submit">Guardar Cambios</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
