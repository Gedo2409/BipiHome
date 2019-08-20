@extends('frontend.layouts.app')
@section('page_header')
<header class="">
  <div class="row align-items-center justify-content-center bipi-header">
      <video autoplay muted loop id="videoBG">
          <source src="{{ asset('img/bipi-bg.mp4') }}" type="video/mp4">
        </video>
    <div class="col-10 col-md-8 text-center text-white">
      <svg version="1.1" width="35%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 389 138" style="enable-background:new 0 0 389 138;" xml:space="preserve">
        <g>
          <g>
            <path style="fill:#FFFFFF;" d="M103.5,21.9H25.7c-4.6,0-8.2,3.7-8.2,8.2v77.7c0,4.6,3.7,8.2,8.2,8.2h77.7c4.6,0,8.2-3.7,8.2-8.2
      			V30.1C111.7,25.6,108,21.9,103.5,21.9z" />
            <g>
              <path style="fill:#424143;" d="M36.6,43c-1.3,2-1.3,4.6,0.1,6.6l22.2,31.6c6.7,9.4,19.9,11.6,29.3,4.9
      				c9.4-6.7,11.6-19.9,4.9-29.3c-6.7-9.4-19.9-11.6-29.3-4.9c-2.6,1.9-3.2,5.5-1.4,8.2c1.9,2.6,5.5,3.2,8.2,1.4c4.2-3,10-2,13,2.2
      				s2,10-2.2,13c-4.2,3-10,2-13-2.2L46.2,42.8c-1.9-2.6-5.5-3.2-8.2-1.4C37.4,41.9,36.9,42.4,36.6,43z" />
            </g>
            <g>
              <path style="fill:#226F8E;" d="M36.7,95c-1.3-2-1.3-4.6,0.1-6.6L59,56.8c6.7-9.4,19.9-11.6,29.3-4.9c9.4,6.7,11.6,19.9,4.9,29.3
      				c-6.7,9.4-19.9,11.6-29.3,4.9c-2.6-1.9-3.2-5.5-1.4-8.2c1.9-2.6,5.5-3.2,8.2-1.4c4.2,3,10,2,13-2.2s2-10-2.2-13
      				c-4.2-3-10-2-13,2.2L46.3,95.2c-1.9,2.6-5.5,3.2-8.2,1.4C37.5,96.1,37.1,95.6,36.7,95z" />
            </g>
            <circle style="fill:#424143;" cx="76.1" cy="68.9" r="6.4" />
          </g>
          <g>
            <path style="fill:#FFFFFF;" d="M128.3,24.5c0-1.6,1.3-2.9,2.9-2.9h35.9c4.7,0,9,0.5,12.8,1.6c3.8,1.1,7.1,2.6,9.8,4.5
      			c2.7,2,4.8,4.4,6.3,7.2c1.5,2.9,2.2,6.1,2.2,9.8c0,5.3-1,9.3-3.1,12.1c-1,1.3-2.1,2.4-3.3,3.4c-1.6,1.3-1.3,3.9,0.5,4.8
      			c0.8,0.4,1.5,0.8,2.3,1.2c2.3,1.3,4.3,3,6.1,5c1.8,2,3.2,4.4,4.2,7.2c1,2.7,1.5,5.9,1.5,9.5c0,9.1-3.3,16.1-9.9,21
      			c-6.6,4.9-15.8,7.4-27.7,7.4h-37.6c-1.6,0-2.9-1.3-2.9-2.9V24.5z M165.1,56.6c2.8,0,4.8-0.6,6.1-2c1.3-1.3,2-3.1,2-5.3
      			s-0.6-4.1-1.8-5.5c-1.2-1.4-3.2-2.2-6-2.2h-9.7c-1.6,0-2.9,1.3-2.9,2.9v9.2c0,1.6,1.3,2.9,2.9,2.9H165.1z M168.2,96.3
      			c4.9,0,8.3-1,10.1-2.9c1.8-2,2.7-4.6,2.7-7.8c0-3.3-0.9-5.8-2.8-7.7c-1.9-1.9-5.2-2.9-10-2.9h-12.5c-1.6,0-2.9,1.3-2.9,2.9v15.6
      			c0,1.6,1.3,2.9,2.9,2.9H168.2z" />
            <path style="fill:#FFFFFF;" d="M221.9,53.1h17.3c2.2,0,4.1,1.8,4.1,4.1v55.2c0,2.2-1.8,4.1-4.1,4.1h-17.3c-2.2,0-4.1-1.8-4.1-4.1
      			V57.1C217.8,54.9,219.6,53.1,221.9,53.1z" />
            <path style="fill:#FFFFFF;" d="M281.6,116.4h-17.4c-2.2,0-4-1.8-4-4V25.6c0-2.2,1.8-4,4-4h32c6.4,0,12.1,1,17,2.9
      			c4.9,1.9,9.1,4.5,12.5,7.9c3.4,3.3,6,7.3,7.7,11.8c1.8,4.5,2.6,9.4,2.6,14.7c0,5.3-0.9,10.2-2.6,14.7c-1.8,4.5-4.3,8.4-7.7,11.7
      			c-3.4,3.3-7.6,5.9-12.5,7.8c-4.9,1.9-10.6,2.9-17,2.9h-6.6c-2.2,0-4,1.8-4,4v12.6C285.6,114.6,283.8,116.4,281.6,116.4z
      			 M294.9,74.4c5.7,0,9.7-1.4,12.1-4.3c2.4-2.9,3.6-6.6,3.6-11.3c0-2.3-0.3-4.4-0.8-6.3c-0.6-1.9-1.5-3.6-2.7-4.9
      			c-1.3-1.4-2.9-2.5-4.8-3.3c-2-0.8-4.4-1.2-7.2-1.2h-5.4c-2.2,0-4,1.8-4,4v23.4c0,2.2,1.8,4,4,4H294.9z" />
            <circle style="fill:#FFFFFF;" cx="230.5" cy="34.7" r="12.5" />
            <path style="fill:#FFFFFF;" d="M350.2,53.1h17.3c2.2,0,4.1,1.8,4.1,4.1v55.2c0,2.2-1.8,4.1-4.1,4.1h-17.3c-2.2,0-4.1-1.8-4.1-4.1
      			V57.1C346.1,54.9,347.9,53.1,350.2,53.1z" />
            <circle style="fill:#FFFFFF;" cx="358.8" cy="34.7" r="12.5" />
          </g>
        </g>
      </svg>
      <br>
      <span><h1>Soluciones en un click</h1></span>
      {{-- Formulario --}}
      <div class="row py-3">
        <div class="col">
          <form action="{{ route('front.buscar') }}" method="POST">
            {{ csrf_field() }}
            <div class="row justify-content-center align-items-center">
              <div class="col-12 col-md-5">
                <select class="custom-select" name="cat_id">
                <option value="{{ $categories->where('name', 'hogar')->first()->id }}" selected>¿Qué estas buscando?</option>
                  @foreach ($categories as $c)
                     <option data-content="<i class='{{ $c->icon }}'></i>" value="{{ $c->id }}">{{ $c->display_name }}</option>
                  @endforeach
                </select>
              </div>
              {{-- <div class="col-12 col-md-4">
                <input type="text" name="lugar" class="form-control" placeholder="Xalapa" value="">
              </div> --}}
              <div class="col-12 col-md-2">
                <button type="submit" class="btn w-100 bg-azul text-white">
                  <i class="fa fa-search"></i> &nbsp; Buscar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      {{-- <div class="row justify-content-center py-4">
        <div class="col-md-10">
          <div class="row">
            <div class="col text-center">
              <i class="fa fa-user fa-3x"></i><br>
              <h6 class="my-3">Categoría</h6>
            </div>
            <div class="col text-center border-left">
              <i class="fa fa-tools fa-3x"></i><br>
              <h6 class="my-3">Categoría</h6>
            </div>
            <div class="col text-center border-left">
              <i class="fa fa-wrench fa-3x"></i><br>
              <h6 class="my-3">Categoría</h6>
            </div>
            <div class="col text-center border-left">
              <i class="fa fa-hammer fa-3x"></i><br>
              <h6 class="my-3">Categoría</h6>
            </div>
            <div class="col text-center border-left">
              <i class="fa fa-toolbox fa-3x"></i><br>
              <h6 class="my-3">Categoría</h6>
            </div>
            <div class="col text-center border-left">
              <i class="fa fa-paint-roller fa-3x"></i><br>
              <h6 class="my-3">Categoría</h6>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</header>
@endsection
@section('content')
<section class="py-4">
  <div class="row justify-content-center">
    <div class="col-10 col-md-10 py-4">
      <!--<h4 class="mont bold">Servicios Premium</h4>-->
    </div>
    <div class="col-md-10 ">
      <div class="row justify-content-center p-card">

        @foreach ($providers->shuffle()->take(5) as $p)
          <div class="col-10 col-sm-5 col-md-4 col-lg  mb-4 mb-lg-0">
            <div class="card border-0">
              <a href="{{ route('front.proveedor', $p->id) }} ">
                <img src="{{ asset($p->logo_path) }}" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="{{ route('front.proveedor', $p->id) }}">
                  <h5 class="card-title mont text-dark">{{ $p->name }}</h5>
                  <p class="card-text text-dark">{{ $p->description }}</p>
                </a>
              <p class="text-center"><span class="{{$p->category->icon}} fa-2x py-2"></span></p>
                @if ($p->reviews->where('is_approved', 1)->sum('grade') > 0 && $p->reviews->where('is_approved', 1)->count() > 0)
                  @for ($i = 0;
                        $i < ceil($p->reviews->where('is_approved', 1)->sum('grade')/$p->reviews->where('is_approved', 1)->count());
                        $i++)
                    <span class="fas fa-star checked"></span>
                  @endfor
                  @for ($i = 0; $i < 5 - ceil($p->reviews->where('is_approved', 1)->sum('grade')/$p->reviews->where('is_approved', 1)->count()); $i++)
                    <span class="far fa-star"></span>
                  @endfor
                  ({{ $p->reviews->where('is_approved', 1)->count() }})
                @else
                  <span><strong>Sin evaluaciones</strong></span>
                @endif


              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>

</section>

<section>
  <div class="row justify-content-center py-5">
    <div class="col-md-12 col-lg-10">
      <div class="row no-gutters align-items-center">
        <div class="col-md-3 bg-gris-1 align-self-stretch">
          <div class="row justify-content-center align-items-center h-100 py-5">
            <div class="col-3 col-md-5">
              <img src="{{ asset('img/logo_negro_vert.png') }}" alt="" class="img-fluid">
              <h2 class="mont bold">HOME</h2>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-9">
          <img src="{{ asset('img/fin2.jpg') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-4">
  <div class="row justify-content-center">
    <div class="col-10 col-md-10 py-4">
      <h4 class="mont bold">Prestadores de servicios más populares</h4>
    </div>
    <div class="col-md-10 ">
      @foreach ($providers->chunk(4) as $providersC)
      <div class="row justify-content-center p-card">
          @foreach ($providersC as $p)
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mb-4 mb-md-0">
              <div class="card border-0">
                <a href="{{ route('front.proveedor', $p->id) }} ">
                  <img src="{{ asset($p->logo_path) }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <a href="{{ route('front.proveedor', $p->id) }}">
                    <h5 class="card-title mont text-dark">{{ $p->name }}</h5>
                    <p class="card-text text-dark">{{ $p->description }}</p>
                  </a>
                  <p class="text-center"><span class="{{$p->category->icon}} fa-2x py-2"></span></p>
                  @if ($p->reviews->where('is_approved', 1)->sum('grade') > 0 && $p->reviews->where('is_approved', 1)->count() > 0)
                    @for ($i = 0;
                          $i < ceil($p->reviews->where('is_approved', 1)->sum('grade')/$p->reviews->where('is_approved', 1)->count());
                          $i++)
                      <span class="fas fa-star checked"></span>
                    @endfor
                    @for ($i = 0; $i < 5 - ceil($p->reviews->where('is_approved', 1)->sum('grade')/$p->reviews->where('is_approved', 1)->count()); $i++)
                      <span class="far fa-star"></span>
                    @endfor
                    ({{ $p->reviews->where('is_approved', 1)->count() }})
                  @else
                    <span><strong>Sin evaluaciones</strong></span>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>
  </div>

</section>

@endsection
