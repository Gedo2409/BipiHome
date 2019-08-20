@extends('frontend.layouts.app')
@section('content')
<div class="row justify-content-center mt-5">
  <div class="col-3 h100 bg-gris-1 py-5 d-none d-lg-block">
    <div class="row py-5">
      <div class="col-12 text-center mt-2">
        <h4>
          Resultados para <br>
          {{ $category->display_name }}
        </h4>
      </div>
      <div class="col-12 p-5 subcategory-checkbox-container">
        <div class="mb-2">

          <!--<label class="form-check-label" for="defaultCheck1">
              <input class="subcategory-checkbox-all" type="checkbox" value="">
              Todos
            </label>-->
        </div>
        @foreach ($conditions as $c)
        <div class="mb-2">

          <label class="form-check-label" for="defaultCheck1">
            <input class="subcategory-checkbox" value="{{ $c->name }}" id="{{ $c->name }}" type="checkbox">
            {{ $c->display_name }}
          </label>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-12 bg-gris-1 pt-5 d-lg-none">
    <div class="row">
      <div class="col-12 text-center">
        <h4>
          Resultados para
          {{ $category->display_name }}
        </h4>
      </div>
      <div class="col-12 px-4">
        <div class="row">
          <div class="col-12 py-2 text-center">
            <a class="btn btn-link text-muted" data-toggle="collapse" href="#mobile-filter" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="fas fa-filter"></i>&nbsp;Filtrar
            </a>
          </div>
          <div class="collapse subcategory-checkbox-container-mobile" id="mobile-filter">
            <div class="col-12 col-md-4 mb-2 text-left text-md-center">

              <!--<label class="form-check-label" for="defaultCheck1">
                  <input class="subcategory-checkbox-mobile-all" type="checkbox" value="">
                  <br class="d-none d-md-block"> Todos
                </label>-->
            </div>
            @foreach ($conditions as $c)
            <div class="col-12 col-md-4 mb-2 text-left text-md-center">

              <label class="form-check-label" for="defaultCheck1">
                <input class="subcategory-checkbox-mobile" value="{{ $c->name }}" id="{{ $c->name }}" type="checkbox">
                <br class="d-none d-md-block">
                {{ $c->display_name }}
              </label>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-9">
    <div class="row justify-content-center">
      <div class="col-md-10 py-5 mt-5">
        @foreach ($providers as $p)
        <div class="row py-4 align-items-center provider {{ implode(" ", $p->conditions->pluck('name')->all()) }}">
          <div class="col">
            <a href="{{ route('front.proveedor', $p->id) }} ">
              <img src="{{ asset($p->logo_path) }}" class="card-img-top" alt="...">
            </a>
          </div>
          <div class="col-md-7 col-lg-9 text-left my-3">
            <a href="{{ route('front.proveedor', $p->id) }}">
              <h5 class="card-title mont text-dark">{{ $p->name }}</h5>
              <p class="card-text text-dark">{{ $p->description }}</p>
            </a>
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
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@section('page_scripts')
<script src="{{ asset('js/filtro.js') }}"></script>
<script src="{{ asset('js/filtro-mobile.js') }}"></script>
@endsection