@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
    <div class="row justify-content-center p-5">
        <div class="col-12">
            <h2 class="text-center mont bold text-muted">Editar</h2>
		</div>
	</div>
	
        <div class="row">
			<div class="col-6">
						<form action="{{ route('subscription_types.update', $s->id) }}" method="POST" class="formulario-articulo"
						            enctype="multipart/form-data">
						            {{ csrf_field() }}
						            <input type="hidden" name="_method" value="PUT" />
						            <div class="row justify-content-center">
						                <div class="col-12 col-md-10 py-4">
						                    <label>Nombre</label>
						                    <input class="form-control" type="text" name="display_name" value="{{ $s->display_name }}" required>
						                </div>
						
						                <div class="col-12 col-md-10 py-4">
						                    <label>Descripción</label>
						                    <input class="form-control" type="text" name="description" value="{{ $s->description }}" required>
						                </div>
						
						                <div class="col-12 col-md-10 py-4">
						                    <label>Precio</label>
						                    <input class="form-control" type="text" name="price" value="{{ $s->price }}" required>
						                </div>
						            </div>
						
						            <div class="row justify-content-center">
						                <button class="btn btn-rectangle btn-raised" type="submit" id="submit">Actualizar</button>
						                <div class="col-10 col-md text-center">
						                    <a href="{{ route('subscription_types.index') }}">
						                        <button class="btn btn-rectangle btn-flat">Volver a Index</button>
						                    </a>
						                </div>
						            </div>
								</form>
					</div>
		</div>
	</div>
</section>
@endsection
