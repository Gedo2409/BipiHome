<!-- Modal -->
<div class="modal fade" id="modalCarrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <div class="row py-3">
          <div class="col text-right">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col cart-container">

          </div>
        </div>
        @if (Session::has('cart'))
          <div class="row">
            <div class="col cart-container">
              @foreach (Session::get('cart')->items as $ci)
                <div class="row">
                  <div class="col-4">
                    <img src="{{ asset($ci['photo']) }}" class="img-fluid" alt="">
                  </div>
                  <div class="col">
                    <div class="row h-100">
                      <div class="col">
                        <span>
                          <strong>{{$ci['item']['name']}}</strong>
                          <br><small class="text-muted">${{ number_format(App\Product::getCostoFinal($ci['item']['id'])) }} ({{$ci['qty']}})</small>
                        </span>
                      </div>
                      <div class="col align-self-end">
                        <span><strong>${{ number_format($ci['price']) }}</strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                @if (!$loop->last)
                  <hr>
                @endif
              @endforeach
            </div>
          </div>
          <hr>
          <div class="row justify-content-between py-3">
            <div class="col">
              <h5>Subtotal</h5>
            </div>
            <div class="col text-right">
              <h5>${{number_format(Session::get('cart')->totalPrice,2)}}</h5>
            </div>
            <div class="col-12 py-2">
              <a href="{{ route('shoppingcart.shoppingcart') }}" class="btn btn-outline-dark btn-lg w-100">Ver carrito</a>
            </div>
          </div>
        @else
          <div class="row align-items-center h50">
            <div class="col text-center">
              <svg version="1.1" id="modal_cart_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 79.8 64.4" enable-background="new 0 0 79.8 64.4" xml:space="preserve" width="150px">
                <g>
                  <rect x="27.956" y="52.227" class="nav_cart" width="8.985" height="8.985" />
                  <rect x="51.918" y="52.227" class="nav_cart" width="8.985" height="8.985" />
                  <path class="nav_cart" d="M21.194,10.295l-1.79-8.985H1v8.985h11.03l6.435,32.308l0.711,3.634h48.937l8.737-35.942H21.194z
                     M61.049,37.251H26.564L23.034,19.28h42.386L61.049,37.251z" />
                </g>
              </svg>
              <hr>
              <h4 class="text-muted">No hay productos en el carrito</h4>
            </div>
          </div>
        @endif

      </div>
    </div>
  </div>
</div>
