
@role('provider')
<div class="row py-5 mt-5 justify-content-center">
  <div class="col-12 text-center">

    <div class="profilepic" style="background-image:url('{{ asset(Auth::user()->provider->logo_path) }}');"></div>
    <h5 class="text-white">{{ Auth::user()->provider->name }}</h5>
    

      @if (Auth::user()->provider->subscription->subscription_end->diffInMonths() <= 1)
        <p class="text-white">Tu subscripción termina {{ Auth::user()->provider->subscription->subscription_end->diffForHumans() }}</p>
      @endif

  </div>
  <div class="col-12 col-sm-10 py-2 d-none d-md-block">
    <div class="nav flex-column nav-pills" id="side-tab" role="tablist" aria-orientation="vertical">
      
      <a class="nav-link" href="{{ route('customer.informacion') }}">
        <i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;Información
      </a>
      
      <a class="nav-link" href="{{ route('customer.servicios') }}">
        <i class="fas fa-info-circle fa-lg"></i>&nbsp;&nbsp;Servicios
      </a>
      
      {{-- <a class="nav-link" href="{{ route('customer.ordenes') }}">
        <i class="fas fa-shopping-cart fa-lg"></i>&nbsp;&nbsp;Órdenes
      </a> --}}
      
      <a class="nav-link" href="{{ route('customer.notificaciones') }}">
        <i class="fas fa-bell fa-lg"></i>&nbsp;&nbsp;Notificaciones
      </a>
      
      <a class="nav-link" href="{{route('back.providerReviews', Auth::user()->provider->id)}}">
        <i class="fas fa-money-check fa-lg"></i>&nbsp;&nbsp;Reseñas
      </a>

      <a class="nav-link" href="{{ route('stats.show',  Auth::user()->provider->id)}}">
        <i class="fas fa-chart-pie fa-lg"></i>&nbsp;&nbsp;Estadísticas
      </a>
      
      {{-- <a class="nav-link" href="{{ route('customer.ajustes') }}">
        <i class="fas fa-cog fa-lg"></i>&nbsp;&nbsp;Ajustes
      </a> --}}
      
    </div>
  </div>
</div>
@endrole


@role('admin')
{{-- <nav class="navbar navbar-expand-md navbar-light"> --}}
<div class="row py-5 mt-5 justify-content-center">
  <div class="col-12 text-center">
    <img src="{{ asset('img/icon.png') }}" alt="" class="img-fluid">
    <h5 class="text-center text-white">{{ Auth::user()->name }}</h5>
    
  </div>

    {{-- <button class="navbar-toggler btn-secondary" type="button" data-toggle="collapse" data-target="#side-tab" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
    
    <div class="col-12 col-sm-10 py-2 d-none d-md-block">
      <div class="nav flex-column nav-pills" id="side-tab" role="tablist" aria-orientation="vertical"> 
        
        {{-- <a class="nav-link" href="{{ route('banners.index') }}">
          <i class="fas fa-money-check fa-lg"></i>&nbsp;&nbsp;Banners
        </a> --}}
        
        <a class="nav-link" href="{{ route('customers.index') }}">
          <i class="fas fa-users fa-lg"></i>&nbsp;&nbsp;Clientes
        </a>
        
        <a class="nav-link" href="{{ route('categories.index') }}">
          <i class="fas fa-tag fa-lg"></i>&nbsp;&nbsp;Categorías
        </a>
        
        <a class="nav-link" href="{{ route('providers.index') }}">
          <i class="fas fa-handshake fa-lg"></i>&nbsp;&nbsp;Proveedores
        </a>
        
        <a class="nav-link" href="{{ route('reviews.index') }}">
          <i class="fas fa-pen-fancy fa-lg"></i>&nbsp;&nbsp;Reseñas
        </a>
        
        <a class="nav-link" href="{{ route('subscription_types.index') }}">
          <i class="fas fa-address-card fa-lg"></i>&nbsp;&nbsp;Suscripciones
        </a>
  
        <a class="nav-link" href="{{ route('stats.dashboard') }}">
          <i class="fas fa-chart-pie fa-lg"></i>&nbsp;&nbsp;Estadísticas
        </a>
  
        {{-- <a class="nav-link" href="#v-pills-settings">
          <i class="fas fa-cog fa-lg"></i>&nbsp;&nbsp;Ajustes
        </a> --}}
        
      </div>
    </div>
  {{-- </nav> --}}
</div>
@endrole
@role('customer')
<div class="row py-5 mt-5 justify-content-center">
  <div class="col-12 text-center">
    <img src="{{ asset('img/icon.png') }}" alt="" class="img-fluid">
    <h5 class="text-white">{{ Auth::user()->name }}</h5>
    <h5 class="text-white">Rol: {{ Auth::user()->role->first()->name }}</h5>
  </div>
  <div class="col-12 col-sm-10 py-2 d-none d-md-block">
    <div class="nav flex-column nav-pills" id="side-tab" role="tablist" aria-orientation="vertical">
      
      {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"  class="nav-link">
        <i class="fa fa-times fa-lg"></i>&nbsp;&nbsp;Cerrar sesión
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form> --}}

      <a class="nav-link" href="{{route('customers.show', Auth::user()->profile->id)}}">
        <i class="fas fa-users fa-lg"></i>&nbsp;&nbsp;Mi Perfil
      </a>

      <a class="nav-link" href="{{route('back.customerFavoritos', Auth::user()->profile->id)}}">
        <i class="fas fa-star fa-lag"></i>&nbsp;&nbsp;Favoritos
      </a>

      <a class="nav-link" href="{{route('back.customerReviews', Auth::user()->profile->id)}}">
        <i class="fas fa-pen-fancy fa-lg"></i>&nbsp;&nbsp;Reseñas
      </a>
      
      {{-- <a class="nav-link" href="{{ route('banners.index') }}">
        <i class="fas fa-money-check fa-lg"></i>&nbsp;&nbsp;Banners
      </a>
      
      <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="fas fa-users fa-lg"></i>&nbsp;&nbsp;Clientes
      </a>
      
      <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="fas fa-tag fa-lg"></i>&nbsp;&nbsp;Categorías
      </a>
      
      <a class="nav-link" href="{{ route('providers.index') }}">
        <i class="fas fa-handshake fa-lg"></i>&nbsp;&nbsp;Proveedores
      </a>
      
      <a class="nav-link" href="{{ route('reviews.index') }}">
        <i class="fas fa-pen-fancy fa-lg"></i>&nbsp;&nbsp;Reviews
      </a>
      
      <a class="nav-link" href="{{ route('subscription_types.index') }}">
        <i class="fas fa-address-card fa-lg"></i>&nbsp;&nbsp;Suscripciones
      </a> --}}
      
      {{-- <a class="nav-link" href="#v-pills-settings">
        <i class="fas fa-cog fa-lg"></i>&nbsp;&nbsp;Ajustes
      </a> --}}
      
    </div>
  </div>
</div>
@endrole
