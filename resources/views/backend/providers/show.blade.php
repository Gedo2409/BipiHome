@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row justify-content-center py-5">
		<div class="col-md-11">
			<div class="row">
				<div class="col-9">
					<h5 class="mont bold">
						Información del responsable
					</h5>
				</div>
				<div class="col text-center">
					<a href="{{ route('providers.edit',$provider->id) }}" class="btn bg-azul text-white">Editar</a>
				</div>
				<div class="col text-center">
					<a href="{{ route('providers.index') }}" class="btn btn-info">Volver</a>
				</div>
				<div class="col text-center">
					<form action="{{ route('provider.downgrade') }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="user_id" value="{{ $provider->user->id }}">
						<button class="btn btn-info">Convertir en Cliente</button>
					</form>				
				</div>
			</div>
			<hr>
			<p><strong>Nombre:&nbsp;</strong>{{ $provider->user->name }}</p>
			<p><strong>Correo:&nbsp;</strong>{{ $provider->user->email }}</p>
		</div>
	</div>
	<div class="row justify-content-center py-5">
		<div class="col-11">
			<h5 class="mont bold">
				Información del negocio
			</h5>
			<hr>
			<div class="row">
				<div class="col-md-7">
					<p><strong>Nombre:&nbsp;</strong>{{ $provider->name }}</p>
					<p><strong>Descripción:&nbsp;</strong>{{ $provider->description }}</p>
					<p><strong>Teléfono:&nbsp;</strong>{{ $provider->phone }}</p>
					<p><strong>Calle:&nbsp;</strong>{{ $provider->street }}</p>
					<p><strong>Colonia:&nbsp;</strong>{{ $provider->neighborhood }}</p>
					<p><strong>Ciudad:&nbsp;</strong>{{ $provider->city }}</p>
					<p><strong>Código Postal:&nbsp;</strong>{{ $provider->postal_code }}</p>
				</div>
				<div class="col-md-5">
					<img src="{{ asset($provider->logo_path) }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center py-5">
		<div class="col-md-11">
			<h5 class="mont bold">
				Fotos mostradas del negocio
			</h5>
			<hr>
			<div class="row">
				@foreach ($provider->pics as $pp)
					<div class="col-md-3">
						<img src="{{ asset($pp->path) }}" alt="" class="img-fluid">
					</div>
				@endforeach
			</div>
		</div>

	</div>
</section>

<section>
	<div class="row justify-content-center py-4">
		<div class="col-md-11">
			<h5 class="mont bold">Reviews</h5>
			@if ($provider->reviews->count() > 0)
				<ul class="list-group list-group-flush">
					@foreach ($provider->reviews as $pr)
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
								<h6 class="mont bold">{{ $pr->customer->user->name }}</h6>
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
@endsection
