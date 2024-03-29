<form action="{{ route('categories.update', $c->id) }}" method="POST" class="formulario-articulo" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT" />
	<div class="row justify-content-center">

		<div class="col-12 col-md-10 py-4">
			<label>Nombre</label>
			<input class="form-control" type="text" name="display_name" value="{{ $c->display_name }}" required>
		</div>

		<div class="col-12 col-md-10 py-4">
			<label>Descripción</label>
			<input class="form-control" type="text" name="description" value="{{ $c->description }}" required>
		</div>

		<div class="col-12 col-md-10 py-4">
			<label>Ícono</label>
			<input class="form-control" type="text" name="icon" value="{{ $c->icon }}" required>
		</div>
	</div>

	<div class="row justify-content-center">
		<button class="btn btn-rectangle btn-raised" type="submit" id="submit">Crear</button>
		<div class="col-10 col-md text-center">
			<a href="{{ route('categories.index') }}">
				<button class="btn btn-rectangle btn-flat">Volver a Index</button>
			</a>
		</div>
	</div>
</form>
