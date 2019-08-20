@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row justify-content-center p-5">
		<div class="col">
			<h2 class="mont bold text-muted">{{ $c->display_name }}</h2>
		</div>
	</div>
	<div class="row">
		@foreach ($c->providers as $cp)
		<div class="col-6">
			<div class="card border-0" style="width: 18rem;">
				<div class="card-header bg-white">
					<h4 class="card-title mont text-center">{{ $c->display_name }}</h4>
				</div>
				<div class="card-body text-center">
					<i class="{{ $c->icon }} fa-5x"></i>

					<p class="card-text py-3">{{ $c->description }}</p>
				</div>
				<div class="card-footer d-flex flex-row justify-content-around bg-white">
					<a href="{{ route('categories.edit', $c->id) }}" class="btn btn-info">Editar</a>
					<a href="{{ route('categories.show', $c->id) }}" class="btn bg-azul text-white">Ver</a>

					<form action="{{ route('categories.destroy', ['id' => $c->id]) }}" method="POST" class="no-margin">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE" />
						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<div class="row justify-content-center">
		<div class="col-4 text-center">
			<a href="{{route('categories.create')}}" class="btn btn-lg bg-azul text-white rounded"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
		</div>
	</div>
</section>
@endsection
