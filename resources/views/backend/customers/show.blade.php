@extends('backend.layouts.app')
@section('content')
{{-- @role('customer','admin') --}}
<section class="py-5 mt-5">
	<div class="row justify-content-center py-5">
		<div class="col-md-11">
			<div class="row">
				<div class="col-9">
					<h5 class="mont bold">
						Información del usuario
					</h5>
				</div>
				<div class="col text-center">
					{{-- <a href="{{ route('providers.edit',$c->id) }}" class="btn bg-azul text-white">Editar</a> --}}
				</div>
				<div class="col text-center">
					<a href="{{ route('customers.edit', $c->id) }}" class="btn btn-info">Editar</a>
				</div>
				<div class="col text-center">
					<a href="{{ route('customers.index') }}" class="btn btn-info">Volver</a>
				</div>
				@if(Auth::user()->hasRole('admin'))
				<div class="col text-center">
					<form action="{{ route('customer.upgrade') }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="user_id" value="{{ $c->user->id }}">
						{{--<label for="phone">Teléfono de contacto: </label>--}} <input type="hidden" value="{{ $c->phone }}" name="phone">
						<button class="btn btn-info">Convertir en Proveedor</button>
					</form>
				</div>
				@endif
			</div>
			<hr>
			{{-- <a href="{{route('back.userReviews', $c->id)}}">Reseñas</a> --}}
			<p><strong>Nombre:&nbsp;</strong>{{ $c->user->name }}</p>
			<p><strong>Correo:&nbsp;</strong>{{ $c->user->email }}</p>
		</div>
	</div>
	<div class="row justify-content-center py-5">
		<div class="col-11">
			<h5 class="mont bold">
				Información del cliente
			</h5>
			<hr>
			<div class="row">
				<div class="col-md-7">
					<p><strong>Teléfono:&nbsp;</strong>{{ $c->phone }}</p>
					<p><strong>Calle:&nbsp;</strong>{{ $c->street }}</p>
					<p><strong>Colonia:&nbsp;</strong>{{ $c->neighborhood }}</p>
					<p><strong>Ciudad:&nbsp;</strong>{{ $c->city }}</p>
					<p><strong>Código Postal:&nbsp;</strong>{{ $c->postal_code }}</p>
				</div>
				{{-- <div class="col-md-5">
					<img src="{{ asset($c->logo_path) }}" alt="" class="img-fluid">
				</div> --}}
			</div>
		</div>
	</div>
</section>

<section>
	<div class="row justify-content-center py-4">
		<div class="col-md-11">
			<h5 class="mont bold">Reviews</h5>
			@if ($c->reviews->count() > 0)
				<ul class="list-group list-group-flush">
					@foreach ($c->reviews as $pr)
				  <li class="list-group-item {{ $pr->is_approved == 1 ? '' : 'text-muted' }}">
						<div class="row align-items-center">
							<div class="col-2 text-center">
								<span>Aprobada</span><br>
								@if ($pr->is_approved == 1)
									<i class="fas fa-check fa-lg"></i>
								@else
									<i class="fas fa-times"></i>
								@endif
							</div>
							<div class="col">
								<h6 class="mont bold">{{ $pr->provider->user->name }}</h6>
								<p>{{ $pr->review }}</p>
								<span><strong>Calificación:</strong></span>
								@for ($i = 0; $i < $pr->grade; $i++)
									<span class="fas fa-star checked"></span>
								@endfor
								@for ($i = 0; $i < 5-$pr->grade; $i++)
									<span class="far fa-star"></span>
								@endfor

							</div>
						</div>
					</li>
					@endforeach
				</ul>
			@else
				<hr>
				<h6 class="mont bold">
					No hay reviews aún
				</h6>
			@endif
		</div>
	</div>
</section>
{{-- @endrole --}}
@endsection
