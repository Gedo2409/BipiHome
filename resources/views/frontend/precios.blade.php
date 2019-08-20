@extends('frontend.layouts.app')
@section('content')
<section class="py-5 mt-5 h100">
    <div><center><a href="http://www.bipihome.com"> <img src="http://www.bipihome.com/img/logotodaspartes.jpg" class="img-fluid" alt=""height="100" width="100"></a></center></div>
  <div class="row justify-content-center mt-5">
    <div class="col-md-10">
      <h1 class="mont bold">Crear Perfil de Prestador de Servicios</h1>
      <p class="pt-5 text-justify ">
        Ofrece tus servicios en BiPi HOME. Mantén tu perfil al día y actualiza el resultado de los trabajos que has realizado. Permite que la comunidad de tus clientes dejen comentarios y calificaciones en tu perfil para que sus recomendaciones generen más contrataciones para ti. Mantente enterado de los usuarios que requieren servicios como el tuyo a tu alrededor.</p>
    </div>
  </div>

  <div class="row justify-content-center py-5">
    <div class="col-md-10">
      <div class="row justify-content-around">
        @foreach ($sub_types as $sub)
        <div class="col-md-3">
          <div class="card">
            <div class="card-header bg-azul text-white py-4">
              <h4 class="mont bold text-center">{{$sub->display_name}}</h4>
            </div>
            <div class="card-body text-center bg-gris-1">
              <h2 class="mont bold text-center">
                $ {{$sub->price}} / año
              </h2>
              <p class="card-text container text-center">{{$sub->description}}</p>
              <a href="{{ route('back.confirmar', ['sub_type' => $sub->id]) }}" class="btn btn-primary">Seleccionar</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</section>


@endsection