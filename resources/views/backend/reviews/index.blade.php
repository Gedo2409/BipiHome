@extends('backend.layouts.app')
@section('content')
<section class="py-3">
	<div class="row justify-content-center p-5">
		<div class="col">
			<h2 class="mont bold text-muted">Reviews</h2>
		</div>
		<div class="col text-right">
			{{-- <a href="{{route('subscription_types.create')}}" class="btn bg-azul text-white rounded"><i class="fa fa-plus"></i>&nbsp;Agregar</a> --}}
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<ul class="list-group list-group-flush">
				<li class="list-group-item d-none d-md-block">
				 <div class="row">
					 <div class="col-1 text-center">
						 <h6 class="mont bold">Aprobar</h6>
					 </div>
					 <div class="col">
						 <h6 class="mont bold">Review</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Proveedor</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Evaluación</h6>
					 </div>
				 </div>
				</li>
				@foreach ($reviews as $r)
				 <li class="list-group-item">
				 	<div class="reseñas row align-items-center">
				 		<div class="col-12 col-md-1 text-center">
							 @if ($r->is_approved)
							<div class="r col-12 col-md-6 p0">
								<a href="{{route('back.toggleApproved',$r->id)}}"><i class="fas fa-check"></i></a>
							</div>
							@else
							<div class="r col-12 col-md-6 p0">
								<a href="{{route('back.toggleApproved',$r->id)}}"><i class="fas fa-times"></i></a>
							</div>
							@endif
						</div>
						<div class="col-12 col-md">
							<h6 class="mont">{{ $r->customer->user->name }}</h6>
							<p>{{ $r->review }}</p>
						</div>
						<div class="col-6 col-md-2 text-center">
							<h6 class="mont">{{ $r->provider->name }}</h6>
						</div>
						<div class="col-6 col-md-2 text-center">
							@for ($i = 0; $i < $r->grade; $i++)
								<span class="fas fa-star checked"></span>
							@endfor
							@for ($i = 0; $i < 5-$r->grade; $i++)
								<span class="far fa-star"></span>
							@endfor
						</div>
				 	</div>
				 </li>
				@endforeach
			</ul>


		</div>
	</div>
</section>
@endsection
