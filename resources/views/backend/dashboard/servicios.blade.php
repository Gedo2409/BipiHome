@extends('backend.layouts.app')
@section('content')
<section class="p-5 mt-5">
  <h5>Servicios</h5>
  <div class="row py-5">
    <div class="col-md-12">
      <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="provider_id" value="{{ Auth::user()->provider->id }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="form-group col-12 col-md-6">
            <label for="">Nombre del servicio</label>
            <input type="text" name="display_name" class="form-control">
            @if ($errors->has('display_name'))
            <span class="help-block">
              <strong>{{ $errors->first('display_name') }}</strong>
            </span>
            @endif
          </div>
          <div class="w-100"></div>
          <div class="form-group col-12 col-md-6">
            <label for="">Descripción del servicio</label>
            <input type="text" name="description" class="form-control">
          </div>
          <div class="w-100"></div>
          <div class="form-group col-12 col-md-6">
            <label for="">Precio del servicio</label>
            <input type="text" name="price" class="form-control">
          </div>
          <div class="w-100"></div>
          <div class="col-12 col-md-6">
            <button class="btn bg-azul text-white">
              Enviar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="px-5">
  <div class="row">
    <div class="col">
      <ul class="list-group list-group-flush">
        @foreach (Auth::user()->provider->services as $ps)
          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-10">
                <h6 class="mont bold text-muted">{{ $ps->display_name }}</h6>
                <p>{{ $ps->description }}</p>
                <h6>${{ number_format($ps->price) }}</h6>
              </div>
              <div class="col">
                <form action="{{ route('services.destroy', ['id' => $ps->id]) }}" method="POST" class="no-margin">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE" />
                  <button type="submit" class="btn"><i class="fa fa-times"></i></button>
                </form>
              </div>

            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
@endsection
