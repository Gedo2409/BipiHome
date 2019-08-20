@extends('backend.layouts.app')
@section('content')
<section class="p-5 mt-5">
  <div class="row">
    <div class="col-12">
      <h3 class="mont bold">
        Notificaciones
      </h3>
    </div>
    <div class="col">
      <ul class="list-group list-group-flush">
        @foreach (Auth::user()->provider->customers()->get() as $pc)
          <li class="list-group-item {{ is_int($loop->iteration/2) ? '' : 'list-group-item-secondary' }}">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="mont bold">
                  {{ $pc->user->name }}
                </h6>
                <span>Status {{ App\Interaction::find($pc->pivot->interaction_type)->display_name }}</span>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
@endsection
