<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalAcerca" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="row no-gutters align-items-center">
        <div class="col-md-4 bg-gris-1 align-self-stretch">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
              <img src="{{ asset('img/logo_negro_vert.png') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col">
          <img src="{{ asset('img/fin2.jpg') }}" alt="" class="img-fluid">
        </div>
      </div>
      <div class="row justify-content-center py-5">
        <div class="col-md-10">
          <h5 class="mont bold">Acerca de BiPi</h5>
          <p class="text-justify">BiPi es una plataforma que asegura la calidad y la relación entre usuarios y proveedores de servicios de mantenimiento doméstico.
          En ella puedes conocer a varios profesionales de mantenimiento, contactarlos, solicitar sus servicios y evaluar la calidad
          de su resultado. Los perfiles de cada uno de los profesionales que se encuentran en BiPi pueden contar con sumarios de su
          trabajo, fotografías y referencias que aumentan la confianza de los clientes. Así mismo, la oportunidad de calificar y comentar
          la experiencia que tiene cada usuario con los prestadores de servicio, permite que se cada proveedor pueda mejorar constantemente
          su atención y su trabajo.
          </p>
        </div>
      </div>
      <div class="row justify-content-center py-5">
        <div class="col-md-10 text-center">
          <a href="{{ route('front.precios') }}" class="btn btn-lg bg-azul text-white">¿Quieres ser proveedor?</a>
        </div>
      </div>
    </div>
  </div>
</div>
