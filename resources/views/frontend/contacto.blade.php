@extends('frontend.layouts.app')
@section('content')
<section class="py-5 mt-5">
    <div class="row h100 align-items-center justify-content-center">
        <div class="col-lg-5 text-leftº">
               <a href="http://www.bipihome.com/"> <img src="{{ asset('img/logotodaspartes.jpg') }}" class="img-fluid" alt="..."   height="200" width="200"></a>
            <h2 class="py-4">Contacto</h2>
            <p>Av. Ruiz Cortines No. 1411, Interior 2 </p>
            <p>Colonia Francisco Ferrer Guardia</p>
            <p>CP 9102 Xalapa, Veracruz, México</p>
            
            
        
        
            <p><a href="mailto:contacto@bipi.mx">contacto@bipi.mx</a></p>
        </div>
        <div class="col-lg-5 text-center">
        <img src="{{ asset('img/fin2.jpg') }}" alt="" class="img-fluid">
            <div class="row py-4 justify-content-center align-items-center">
                <span>Síguenos</span>
                <a href="https://facebook.com" class="p-2 text-dark"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com" class="p-2 text-dark"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.instagram.com/?hl=es-la" class="p-2 text-dark"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
