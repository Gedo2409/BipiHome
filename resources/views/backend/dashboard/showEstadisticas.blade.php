@extends('backend.layouts.app')
@section('content')
@role('admin')
<section class="py-5 mt-5">
    <h1>Proveedores</h1>
<div class="row">
      <div class="col">
        <ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col">
						 <h6 class="mont bold">Proveedor</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Día</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Semana</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Mes</h6>
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
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
      </div>
    </div>
</section>
<section class="py-5 mt-5">
    <h1>Categorias</h1>
<div class="row">
      <div class="col">
        <ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col">
						 <h6 class="mont bold">Proveedor</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Día</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Semana</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Mes</h6>
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
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
      </div>
    </div>
</section>
@endrole
@role('provider')
<section class="py-5 mt-5">
    <h1>Estadísticas</h1>
<div class="row">
      <div class="col">
        <ul class="list-group list-group-flush">
				<li class="list-group-item">
				 <div class="row">
					 <div class="col">
						 <h6 class="mont bold">Proveedor</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Día</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Semana</h6>
					 </div>
					 <div class="col-2 text-center">
						 <h6 class="mont bold">Mes</h6>
					 </div>
				 </div>
				</li>
				@foreach ($provider as $p)
				<li class="list-group-item">
					<div class="row align-items-center">
						<div class="col">
							<p>{{ $p->name }}</p>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
						</div>
						<div class="col-2 text-center">
							<h6 class="mont"><a href="{{route('estadisticas')}}">Ver</a></h6>
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