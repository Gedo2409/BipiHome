@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
	<div class="row justify-content-center p-5">
		<div class="col">
			<h2 class="mont bold text-muted">{{ $s->display_name }}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col-1 text-center">
						 <h6 class="mont bold">Suscriptores</h6>
					 </div>
					 <div class="col">
						 <h6 class="mont bold text-center">Información</h6>
					 </div>
					 {{-- <div class="col-2 text-center">
						 <h6 class="mont bold">Suscriptores</h6>
					 </div> --}}
					 {{-- <div class="col-2 text-center">
						 <h6 class="mont bold">Precio</h6>
					 </div> --}}
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Acciones</h6>
					 </div>
				 </div>
				</li>
				@foreach ($s->subscriptions as $ss)
				 <li class="list-group-item">
				 	<div class="row">
				 		<div class="col-1 text-center">
							<h6 class="mont">{{ App\Provider::find($ss->provider_id)->name }}</h6>
						</div>
						<div class="col text-center">
							<h6 class="mont">{{ $ss->subscription_end }}</h6>
							<p>{{ $ss->description }}</p>
						</div>
						{{-- <div class="col-2 text-center">
							<h6 class="mont">{{ $s->subscriptions->count() }}</h6>
						</div> --}}
						{{-- <div class="col-2 text-center">
							<h6 class="mont">$ {{ number_format($ss->price,2) }}</h6>
						</div> --}}
						<div class="col-2">
							<div class="row align-items-center justify-content-around">
								{{-- <a href="{{ route('subscriptions.edit', $ss->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a> --}}
								<a href="{{ route('subscriptions.show', $ss->id) }}" class="btn btn-success"><i class="fas fa-folder-open"></i></a>

								<form action="{{ route('subscriptions.destroy', ['id' => $ss->id]) }}" method="POST" class="no-margin">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE" />
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
								</form>
							</div>
						</div>
				 	</div>
				 </li>
				@endforeach
			</ul>
		</div>
	</div>

	<div class="row justify-content-center">

	</div>
</section>
@endsection
