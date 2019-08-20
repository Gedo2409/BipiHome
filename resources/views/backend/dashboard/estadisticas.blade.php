@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
  <h1>Estadísticas</h1>
  @role('admin')
    <div class="row">
      <div class="col">
        <ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col">
						 <h6 class="mont bold">Proveedor</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Clicks</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Favoritos</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Reseñas</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Contactar</h6>
					 </div>
				 </div>
				</li>
				@foreach ($provider as $p)
				<li class="list-group-item">
					<div class="row align-items-center">
						{{-- <div class="col text-center">
							<h6 class="mont">{{ $r->id }}</h6>
						</div> --}}
						<div class="col">
							{{-- <h6 class="mont">{{ $r->customer->user->name }}</h6> --}}
							<p>{{ $p->name }}</p>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont">{{ count($p->clicks) }}</h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont">{{ count($p->clicks) }}</h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont">{{ count($p->clicks) }}</h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont">{{ count($p->clicks) }}</h6>
						</div>
					</div>
				</li>
						@endforeach
			</ul>
      </div>
    </div>
  @endrole
  @role('customer')
  <div class="row">
      <div class="col">
        
      </div>
    </div>
  @endrole
</section>
@endsection
