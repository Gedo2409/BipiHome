@extends('frontend.layouts.app')
@section('content')
<section class="py-5 mt-5 h100">

  <div class="row justify-content-center mt-5 py-5">
    <div class="col-5">
      <div class="row justify-content-center">
        <div class="col-5">
          <a href="http://www.bipihome.com"><img src="{{ asset('img/logotodaspartes.jpg') }}" alt="" class="img-fluid"></a>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <h1 class="mont bold">Acerca de BiPi HOME</h1>
      <p class="pt-3 text-justify ">
        <strong>BiPi HOME</strong> es una plataforma que asegura la calidad, la accesibilidad y la relación entre usuarios y proveedores de servicios de mantenimiento doméstico. En ella puedes conocer a varios profesionales, contactarlos, solicitar sus servicios, evaluar la calidad de su trabajo y recomendarlos. Los perfiles de cada uno de los profesionales que se encuentran en BiPi HOME pueden contar con un resumen de su trabajo, fotografías y referencias que aumenten la confianza de los clientes. La oportunidad de calificar y comentar la experiencia que tiene cada usuario con los prestadores de servicio, permite que cada proveedor pueda mejorar constantemente su atención y desempeño. La disponibilidad de cada prestador de servicio, que se encuentre cerca de ti, te da la seguridad de que también puedes resolver cualquier emergencia.
      </p>
    </div>
    <div class="col-md-5 pt-5 mt-lg-5">
      <h1 class="mont bold">Misión</h1>
      <p class="pt-1 text-justify ">
        Conectar en gran cantidad a usuarios y prestadores de servicios en general, en un ecosistema digital que proporcione soluciones rápidas, efectivas, de gran calidad. A bajo costo para los proveedores y sin costo para los usuarios.
      </p>
    </div>
    <div class="col-md-5 pt-5 mt-lg-5">
      <h1 class="mont bold">Visión</h1>
      <p class="pt-3 text-justify ">
        Ser una empresa líder en el mercado de servicios digitales B2B y B2C, que genere valor para los socios, los empleados y los clientes
      </p>
    </div>
  </div>
</section>
@endsection