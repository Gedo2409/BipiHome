@extends('backend.layouts.app')
@section('content')
	@role('provider')
	<section class="py-5 mt-5">
	<div class="row">
		<div class="col p-5">
			<h2 class="mont bold text-muted">
				Reseñas
			</h2>
		</div>
	</div>
	<div class="row">
		<div class="col px-5">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col">
						 <h6 class="mont bold">Reseñas</h6>
					 </div>
					 <div class="col-4 text-center">
						 <h6 class="mont bold">Cliente</h6>
					 </div>
					 <div class="col-4 text-center">
						 <h6 class="mont bold">Evaluación</h6>
					 </div>
				 </div>
				</li>
				@foreach ($provider->reviews as $r)
				<li class="list-group-item">
					<div class="row align-items-center">
						{{-- <div class="col text-center">
							<h6 class="mont">{{ $r->id }}</h6>
						</div> --}}
						<div class="col">
							{{-- <h6 class="mont">{{ $r->customer->user->name }}</h6> --}}
							<p>{{ $r->review }}</p>
						</div>
						<div class="col text-center">
							<h6 class="mont">{{ $r->customer->user->name }}</h6>
						</div>
						<div class="col text-center">
							@for ($i = 0; $i< $r->grade; $i++)
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
	@endrole
	@role('customer')
	<section class="py-5 mt-5">
	<div class="row">
		<div class="col p-5">
			<h2 class="mont bold text-muted">
				Reseñas
			</h2>
		</div>
	</div>
	<div class="row">
		<div class="col px-5">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col">
						 <h6 class="mont bold">Reseñas</h6>
					 </div>
					 <div class="col-4 text-center">
						 <h6 class="mont bold">Proveedor</h6>
					 </div>
					 <div class="col-4 text-center">
						 <h6 class="mont bold">Evaluación</h6>
					 </div>
				 </div>
				</li>
			@foreach ($customer->reviews as $r)
			<li class="list-group-item">
			<div class="row align-items-center">
				{{-- <div class="col text-center">
					<h6 class="mont">{{ $r->id }}</h6>
				</div> --}}
				<div class="col">
					{{-- <h6 class="mont">{{ $r->customer->user->name }}</h6> --}}
					<p>{{ $r->review }}</p>
				</div>
				<div class="col text-center">
					<h6 class="mont">{{ $r->provider->name }}</h6>
				</div>
				<div class="col text-center">
					@for ($i = 0; $i< $r->grade; $i++)
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
		@endrole
@endsection