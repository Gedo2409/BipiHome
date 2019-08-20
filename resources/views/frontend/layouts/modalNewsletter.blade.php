<!-- Modal -->
<div class="modal fade" id="modalNewsletter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row h50 align-items-center justify-content-center m-0">
          <div class="col text-center">
            <h2>Newsletter <br> con aroma a diseño</h2>
            <img src="{{ asset('img/newsletter_icon.png') }}" class="img-fluid my-3" alt="">
            <form class="" action="" method="GET" id="newsletter-form-modal">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="E-mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn" type="button" id="button-addon2">
                    <i class="fas fa-chevron-right"></i>
                  </button>
                </div>
              </div>
            </form>
            <span>Suscríbete y recibe una sorpresa</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
