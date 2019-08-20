@extends('backend.layouts.app')
@section('content')
<section class="py-3">
	<div class="row justify-content-center p-5">
		<div class="col">
			<h2 class="mont bold text-muted">Tipos de suscripción</h2>
		</div>
		<div class="col text-right">
			<a href="{{route('subscription_types.create')}}" class="btn bg-azul text-white rounded"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col-1 text-center d-none d-md-block">
						 <h6 class="mont bold">ID</h6>
					 </div>
					 <div class="col">
						 <h6 class="mont bold">Información</h6>
					 </div>
					 <div class="col text-center">
						 <h6 class="mont bold">Suscriptores</h6>
					 </div>
					 <div class="col-2 text-center d-none d-md-block">
						 <h6 class="mont bold">Precio</h6>
					 </div>
					 <div class="col-2 text-center d-none d-md-block">
						 <h6 class="mont bold">Acciones</h6>
					 </div>
				 </div>
				</li>
				@foreach ($st as $s)
				 <li class="list-group-item">
				 	<div class="row">
				 		<div class="col-1 text-center d-none d-md-block">
							<h6 class="mont">{{ $s->id }}</h6>
						</div>
						<div class="col">
							<h6 class="mont">{{ $s->display_name }}</h6>
							<p>{{ $s->description }}</p>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont">{{ $s->subscriptions->count() }}</h6>
						</div>
						<div class="col-2 text-center d-none d-md-block">
							<h6 class="mont">$ {{ number_format($s->price,2) }}</h6>
						</div>
						<div class="col-2">
							<div class="row align-items-center justify-content-around">
								<a href="{{ route('subscription_types.edit', $s->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
								<a href="{{ route('subscription_types.show', $s->id) }}" class="btn btn-success"><i class="fas fa-folder-open"></i></a>

								{{-- <form action="{{ route('subscription_types.destroy', ['id' => $s->id]) }}" method="POST" class="no-margin">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE" />
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
								</form> --}}
							</div>
						</div>
				 	</div>
				 </li>
				@endforeach
			</ul>


		</div>
	</div>
</section>
@endsection
