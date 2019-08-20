@extends('frontend.layouts.app') 
@section('content')
<section class="py-5 mt-5 h100">
  <div class="row justify-content-center mt-5">
    <div class="col-md-10">
      <h1 class="mont bold">Información de pago</h1>
      <p class="pt-5 text-justify ">
        Subscripción <strong>{{$sub->display_name}}</strong>
      </p>
    </div>
  </div>

  <div class="row justify-content-center py-5">
    <div class="col-md-10">
      <div class="row justify-content-around">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header bg-azul text-white py-4">
              <h4 class="mont bold text-center">{{$sub->display_name}}</h4>
            </div>
            <div class="card-body text-center bg-gris-1">
              <h2 class="mont bold text-center">
                $ {{$sub->price}} / mes
              </h2>
              <p class="card-text container text-center">{{$sub->description}}</p>
              {{-- <a href="{{ route('register') }}" class="btn btn-primary">Comprar</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection