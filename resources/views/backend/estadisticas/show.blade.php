@extends('backend.layouts.app')
@section('content')
<section class="py-5 mt-5">
    <h1>Estadísticas</h1>
    <h6 class="py-1 text-center">Este Mes</h6>
    <div class="row py-5">
        <div class="col">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <div class="row">
                    <div class="col">
                        <h6 class="mont bold">Proveedor</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Favorito</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Contactar</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Reseñas</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Clicks</h6>
                    </div>
                </div>
                </li>
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col">
                            <p>{{ $provider->name }}</p>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->favoritesThisMonth)}}</h6>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->contactedThisMonth)}}</h6>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->reviewsThisMonth)}}</h6>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->clicksThisMonth)}}</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <h6 class="py-5 text-center">Mes Anterior</h6>
    <div class="row py-5">
        <div class="col">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <div class="row">
                    <div class="col">
                        <h6 class="mont bold">Proveedor</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Favorito</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Contactar</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Reseñas</h6>
                    </div>
                    <div class="col col-sm-2 text-center">
                        <h6 class="mont bold">Clicks</h6>
                    </div>
                </div>
                </li>
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col">
                            <p>{{ $provider->name }}</p>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->favoritesPastMonth)}}</h6>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->contactedPastMonth)}}</h6>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->reviewsPastMonth)}}</h6>
                        </div>
                        <div class="col col-sm-2 text-center">
                            <h6 class="mont">{{count($provider->clicksPastMonth)}}</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection