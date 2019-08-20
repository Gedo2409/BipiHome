@extends('backend.layouts.app')
@section('content')
<section class="py-2">
	<div class="row justify-content-center p-5">
		<div class="col">
			<h2 class="mont bold text-muted">Clientes</h2>
		</div>
		{{-- <div class="col text-right">
			<a href="{{route('customers.create')}}" class="btn bg-azul text-white rounded"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
		</div> --}}
	</div>
	<div class="row justify-content-center">
		<div class="col-12 col-md-12">
			<table class="table table-responsive-sm">
				<thead>
					<th scope="col">id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Acciones</th>
				</thead>
				<tbody>
					@foreach ($customers as $c)
						<tr>
							<td scope="row">{{ $c->id }}</td>
							<td>
								{{ $c->user->name }}<br>
								{{ $c->user->email }}
							</td>

							<td class="d-flex flex-row align-items-around">
								{{-- <a href="{{ route('customer.edit', $c->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a> --}}
								<a href="{{ route('customers.show', $c->id) }}" class="btn btn-success"><i class="fas fa-folder-open"></i></a>
								&nbsp;
								<form action="{{ route('customers.destroy', ['id' => $c->id]) }}" method="POST" class="no-margin">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE" />
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection
