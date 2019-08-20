<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BiPi HOME @yield('page_title') </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="{{ url('img/icon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">

  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <!-- CSS Files -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  {{-- select2 --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  {{-- Ligtbox --}}
  <link rel="stylesheet" href="{!! asset('css/lightbox.css') !!}">

  <!-- BiPi -->
  <link rel="stylesheet" href="{!! asset('css/bipi.css') !!}">


  <!-- Facebook Mark UP -->
  <meta property="og:url" content="" />
  <meta property="og:type" content="website  - Namespace URI: " />
  <meta property="og:title" content="BiPi Home" />
  <meta property="og:description" content="Todo lo que buscas a un click" />
  <meta property="og:image" content="{{url('img/bipiplus.jpg')}}" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="">

  <!--  Social tags      -->
  <meta name="keywords" content="renta venta inmuebles xalapa veracruz edificios casas apartamentos departamentos desarollos inmuebles ">
  <meta name="description" content="La agencia con más de 3000 hogares de experiencia.">
  @yield('page_styles')
  @yield('page_head')
</head>

<body class="@yield('body_class')">
  <!-- Barra de navegación -->

  @yield('page_header')
  <div class="container-fluid" id="mdo-content">
    @include('frontend.layouts.navbars.navbar')

    <!-- Contenido -->
    @yield('content')

    {{-- Barra con formulario o Modal --}}
    <div class="fixed-bottom">

    </div>
    <!-- Footer -->
    @include('frontend.layouts.footers.footer')
  </div>

  @include('frontend.layouts.modalAcerca')
  @include('frontend.layouts.modalNewsletter')
  @include('frontend.layouts.modalCarrito')
  @yield('page_modals')

  {{-- Scripts --}}
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  {{-- GSAP --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  {{-- <GASP>CSS</GASP> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/plugins/CSSRulePlugin.min.js"></script>

  {{-- ScrollMagic --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>

  {{-- SweetAlert --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  {{-- Validator --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

  <!-- Validate JS en español -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_es.min.js"></script>

  {{-- Select2 --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  {{-- leru scripts --}}
  <script type="text/javascript" src="{{ asset('js/bipi.js') }}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
          @if (Session::has('messageC'))
          swal({
            title: "Mensaje Recibido",
            text: "Hemos recibido tu mensaje, en breve nos pondremos en contacto contigo",
            icon: "success",
          });
          @endif
          $(function () {
            $('[data-toggle="tooltip"]').tooltip()
          })
        });
  </script>

  <!-- Scripts de la página -->
  @yield('page_scripts')
</body>

</html>