@extends('backend.layouts.app')
@section('content')
    <div class="dashboard row mt-5">
        <div class="col-10">
            @foreach ($customer->favorites as $cf)
            <div class="db col-4">
                <div class="rowp-3">
                    <div class="col text-center">
                    <a href="{{route('front.proveedor', $cf->id)}}"><img class="img-fluid" src="{{asset($cf->logo_path)}}" alt=""></a>
                    </div>
                    <div class="col text-center">
                        <h4 class="tittle"><small>{{$cf->name}}</small></h4>
                    </div>
                </div>
            </div>    
            @endforeach
        </div>
    </div>
@endsection