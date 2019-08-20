@extends('backend.layouts.app')
@section('content')
<section class="py-3">
    <h1 class="text-center">Estadísticas</h1>
    @role('admin')
    <div class="dashboard row justify-content-around py-5 mt-5">
        <div class="col-12 py-2 text-center">
            <div class="db col-12 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Categorias</h4>
                    </div>
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-12 text-left">
                                <h5>Top 3 Categorias por Clicks</h5>
                            </div>
                                <div class="col-12 py-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <h6 class="mont bold">Categorias</h6>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <h6 class="mont bold">Clicks</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @for ($i = 0; $i < 3; $i++)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <P>{{$top_categories[$i]->display_name}}</P>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="mont">{{count($top_categories[$i]->clicks)}}</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            <div class="col-12 text-right mt-5">
                                <small><a class="nav-link" href="{{ route('stats.index') }}">Ver todos los categorias</i></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="db col-12 col-md-10 py-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Proveedores</h4>
                    </div>
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-12 text-left">
                                <h5>Top 3 Proveedores por Clicks</h5>
                            </div>
                                <div class="col-12 py-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <h6 class="mont bold">Proveedores</h6>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <h6 class="mont bold">Clicks</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @for ($i = 0; $i < 3; $i++)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <P>{{$top_providers[$i]->name}}</P>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="mont">{{count($top_providers[$i]->clicks)}}</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            <div class="col-12 text-right mt-5">
                                <small><a class="nav-link" href="{{ route('stats.index') }}">Ver todos los proveedores</i></a></small>
                            </div>
                            <div class="col-12 text-left">
                                <h5>Top 3 Proveedores por Favoritos</h5>
                            </div>
                                <div class="col-12 py-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <h6 class="mont bold">Proveedores</h6>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <h6 class="mont bold">Clicks</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @for ($i = 0; $i < 3; $i++)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <P>{{$top_providers[$i]->name}}</P>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="mont">{{count($top_providers[$i]->favorites)}}</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            <div class="col-12 text-right mt-5">
                                <small><a class="nav-link" href="{{ route('stats.index') }}">Ver todos los proveedores</i></a></small>
                            </div>
                            <div class="col-12 text-left">
                                <h5>Top 3 Proveedores por Contactar</h5>
                            </div>
                                <div class="col-12 py-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <h6 class="mont bold">Proveedores</h6>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <h6 class="mont bold">Clicks</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @for ($i = 0; $i < 3; $i++)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <P>{{$top_providers[$i]->name}}</P>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="mont">{{count($top_providers[$i]->contacted)}}</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            <div class="col-12 text-right mt-5">
                                <small><a class="nav-link" href="{{ route('stats.index') }}">Ver todos los proveedores</i></a></small>
                            </div>
                            <div class="col-12 text-left">
                                <h5>Top 3 Proveedores por Reseñas</h5>
                            </div>
                                <div class="col-12 py-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <h6 class="mont bold">Proveedores</h6>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <h6 class="mont bold">Clicks</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @for ($i = 0; $i < 3; $i++)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <P>{{$top_providers[$i]->name}}</P>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="mont">{{count($top_providers[$i]->reviews)}}</h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            <div class="col-12 text-right mt-5">
                                <small><a class="nav-link" href="{{ route('stats.index') }}">Ver todos los proveedores</i></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole
    @role('provider')
    <div class="dashboard row justify-content-center py-5 mt-5">
        <div class="col-12 py-2 text-center">
            <div class="db col-3">
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
            <div class="db col-3">
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
            <div class="db col-3">
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
            <div class="db col-3">
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
            <div class="db col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title m-0 text-center">Estadísticas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center p-3">
                            <div class="col-6">
                                <a class="nav-link" href="#"><i class="fas fa-chart-pie fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole
    
</section>
@endsection
