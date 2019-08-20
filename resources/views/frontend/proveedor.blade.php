@extends('frontend.layouts.app')
@section('content')
<section class="p-5 mt-5">
<div><center><a href="http://www.bipihome.com"> <img src="http://www.bipihome.com/img/logotodaspartes.jpg" class="img-fluid" alt=""height="100" width="100"></a></center></div>
  <div class="row py-5 align-items-center justify-content-center my-5">
    <div class="col-10 col-md-5">
      <div class="row align-items-center py-5">
        <div class="col-md-4 py-4 py-md-0">
          <img src="{{ asset($p->logo_path) }}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-6">
          <h4 class="mont text primary">{{ $p->name }}</h4>
          <p>{{ $p->description }}</p>
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
    <div class="col-10 col-md-5">
      @if (Session::has('provider_info'))
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h5 class="text-dark">Dirección</h5>
          <p>
            <span>{{ $p->street }}</span><br>
            <span>{{ $p->neighborhood }}</span><br>
            <span>{{ $p->city }}</span>
          </p>
          <h6><i class="fa fa-phone"></i>&nbsp;<strong>{{ $p->phone }}</strong></h6>
        </div>
        @if(Auth::user()->hasRole('customer'))
        <div>
          <a href="{{ route('back.createInteraction',['customer_id' => Auth::user()->profile->id, 'provider_id' => $p->id, 'interaction_id' => 1 /* 1 es favorite */]) }}" class="btn bg-azul btn-lg text-white">
            Añadir a Favoritos
          </a>
        </div>
        @endif
      </div>
      @else
      <div class="row justify-content-center py-5">
        <div class="col-md-6 text-center">
          <a href="{{ route('front.provider.info', $p->id) }}" class="btn bg-azul btn-lg text-white">
            Contactar
          </a>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>

<section class="">
  <div class="row justify-content-around">
    @foreach ($p->pics as $pp)
    <div class="col-10 col-md-5 col-lg p-0 mb-5">
        <a href="{{ asset($pp->path) }}" data-lightbox="portfolio" data-title="Muestrade servicio ( {{ $loop->iteration }}/{{ $loop->count }})"> 
          <img src="{{ asset($pp->path) }}" alt="" class="w-100">
        </a>
     
    </div>
    @endforeach
  </div>
</section>

<section class="px-5">
  <div class="row justify-content-center py-5">
    <div class="col-md-10 col-lg-8 ">
      <h3 class="mont bold">
        Servicios
      </h3>
      <div class="row">
        @foreach ($p->services as $ps)
        <div class="col-12 py-3">
          <h5 class="mont bold">{{ $ps->display_name }}</h5>
          <p>{{ $ps->description }}</p>
          <h6>${{ $ps->price }}</h6>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-md-10 col-lg-4">
      <div class="row">

        <div class="col-12 bg-gris-1 py-5 order-2 order-lg-1">
          <h5 class="mont bold">Acepta</h5>
          <ul class="list-group list-group-flush">
            @foreach ($conditions as $c)
            <li class="list-group-item bg-gris-1">
              <div class="row">
                <div class="col text-left">
                  <span>{{ $c->display_name }}</span>
                </div>
                <div class="col text-right">
                  <span>{{ $p->conditions->contains($c->id) ? 'Si' : 'No' }}</span>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="col-12 py-4 order-1 order-lg-2">
          <h5 class="mont bold">Evaluación</h5>
          @if(Session::has('provider_info'))
            @if(Auth::user()->hasRole('customer'))
                <form action="{{route('back.customerReview')}}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="customer_id" value="{{ Auth::user()->profile->id }}">
                  <input type="hidden" name="provider_id" value="{{ $p->id }}">
                  <textarea name="review" id="" cols="30" rows="10"></textarea>
                  <input type="text" name="grade">
                  @if ($errors->has('review'))
                    <span class="help-block">
                      <strong>{{ $errors->first('review') }}</strong>
                    </span> 
                  @endif
                  @if ($errors->has('grade'))
                    <span class="help-block">
                      <strong>{{ $errors->first('grade') }}</strong>
                    </span> 
                  @endif
                  <input type="submit" value="Submit">
                </form>
            @endif
          @endif
          @foreach ($p->reviews as $pr)
          <div class="row py-4">
            <div class="col-4">
              <h6 class="mont bold"> {{ $pr->customer->user->name }}</h6>
            </div>
            <div class="col text-left">
              @for ($i = 0; $i < $pr->grade; $i++)
              <span class="fas fa-star checked"></span>
              @endfor
              @for ($i = 0; $i < 5-$pr->grade; $i++)
              <span class="far fa-star"></span>
              @endfor
            </div>
            <div class="col-12">
              <p>{{ $pr->review }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
      

    </div>
    <div class="row justify-content-center py-5">
        <div class="col-10 bg-gris-1 p-3">
          <h5 class="mont bold">Términos y condiciones</h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi incidunt eos, ipsam voluptates beatae velit aut laborum placeat consequuntur veritatis recusandae voluptate commodi sequi itaque natus voluptatum dolore! Reprehenderit sed sapiente sequi illo ratione blanditiis natus quod consequuntur qui quo?
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quas, deserunt dolores similique veritatis repudiandae laboriosam, eaque perspiciatis ab illo soluta architecto earum quaerat saepe fuga aut quia qui molestias.
          </p>
        </div>
      </div>
  </div>
</section>

@endsection

@section('page_scripts')

{{-- lihgtbox --}}
<script src="{{ asset('js/lightbox.js') }}"></script>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'maxWidth': 600,
      'maxHeight':600,
      'wrapAround':true,
    })
</script>

@endsection
