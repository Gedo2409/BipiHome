@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row justify-content-center p-5">
		<div class="col">
			<h2 class="mont bold text-muted">Proveedores</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-10">
			<div class="row">
				@foreach ($providers as $p)
					<div class="col-12 col-sm-6 col-md-4 py-2">
						<div class="card border-0">
							<img src="{{ asset($p->logo_path) }}" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title mont">{{ $p->name }}</h5>
								<p class="card-text">{{ $p->description }}</p>
								
							</div>
							<div class="card-footer bg-white border-0">
								<div class="row justify-content-around">
									<a href="{{ route('providers.edit',$p->id) }}" class="btn btn-info">Editar</a>
									<a href="{{ route('providers.show',$p->id) }}" class="btn btn-info">Ver detalles</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-4 text-center">
			<a href="{{route('providers.create')}}" class="btn btn-lg bg-azul text-white rounded"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
		</div>
	</div>
</section>
@endsection
