@extends('backend.layouts.app')
@section('content')
<section class="text-center py-5 mt-1">
    <h1 class="text-center">Bienvenido</h1>
    @role('provider')
    <div class="dashboard row justify-content-center py-5 mt-1">
        <div class="col-12 py-2 text-center">
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Información</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                                <a class="nav-link" href="{{ route('customer.informacion') }}"><i class="fa fa-home fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Servicios</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                                <a class="nav-link" href="{{ route('customer.servicios') }}"><i class="fas fa-info-circle fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Notificaciones</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                                <a class="nav-link" href="{{ route('customer.notificaciones') }}"><i class="fas fa-bell fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Reseñas</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{route('back.providerReviews', Auth::user()->provider->id)}}"><i class="fas fa-pen-fancy fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Estadísticas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                                <a class="nav-link" href="{{route('stats.show',  Auth::user()->provider->id)}}"><i class="fas fa-chart-pie fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- 
            <a href="{{ route('customer.ordenes') }}">
                <i class="fas fa-shopping-cart fa-lg"></i>&nbsp;&nbsp;Órdenes
            </a> --}}

            {{-- <a href="{{ route('customer.estadisticas') }}">
                <i class="fas fa-chart-pie fa-lg"></i>&nbsp;&nbsp;Estadísticas
            </a>

            <a href="{{ route('customer.ajustes') }}">
                <i class="fas fa-cog fa-lg"></i>&nbsp;&nbsp;Ajustes
            </a> --}}
        </div>
    </div>
    @endrole
    @role('admin')
    <div class="dashboard row justify-content-center py-5 mt-1">
        <div class="col-12 py-2 px-0 text-center">
            <div class="db col-12 col-md-12 col-lg-4 text-center py-3 mr-0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Clientes</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                                <a class="nav-link" href="{{ route('customers.index') }}"><i class="fas fa-users fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-4 py-3 mr-0">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Categorías</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-tag fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-4 py-3 mr-0">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Proveedores</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{ route('providers.index') }}"><i class="fas fa-handshake fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-4 py-3 mr-0">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Reseñas</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{ route('reviews.index') }}"><i class="fas fa-pen-fancy fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-4 py-3 mr-0">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Suscripciones</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{ route('subscription_types.index') }}"><i class="fas fa-address-card fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-4 py-3 mr-0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Estadísticas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                            <a class="nav-link" href="{{route('stats.dashboard')}}"><i class="fas fa-chart-pie fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole
    @role('customer')
    <div class="dashboard row justify-content-center py-5 mt-1">
        <div class="col-12 py-2 text-left">
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Mi perfil</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{route('customers.show', Auth::user()->profile->id)}}"><i class="fas fa-users fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Reseñas</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{route('back.customerReviews', Auth::user()->profile->id)}}"><i class="fas fa-pen-fancy fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="db col-12 col-md-12 col-lg-5 py-3">
                <div class="card">
                        <div class="card-header">
                            <h4 class="title m-0 text-center">Favoritos</h4>
                        </div>
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-6">
                            <a class="nav-link" href="{{route('back.customerFavoritos', Auth::user()->profile->id)}}"><i class="fas fa-star fa-4x"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
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
        </div>
    </div>
    @endrole
</section>
@endsection
