<div class="modal fade" id="modalAuth" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-3 border-warning rounded-5">
      <div class="modal-header bg-white border-bottom-0 rounded-top-5 p-0">
        <div class="d-flex flex-wrap justify-content-between w-100">
          <button type="button" class="btn btn-warning fw-bolder text-uppercase rounded-bottom-0 rounded-top-5 w-50 py-3" data-form="login" onclick="changeAuthTab(this)">Iniciar Sesión</button>
          <button type="button" class="btn btn-white fw-bolder text-uppercase rounded-bottom-0 rounded-top-5 w-50 py-3" data-form="register" onclick="changeAuthTab(this)">Regístrate</button>
        </div>

      </div>
      <div class="modal-body bg-warning rounded-bottom-5 px-2 py-3">
        <div class="text-end">
          <button type="button" class="btn btn-link text-primary pt-0" data-bs-dismiss="modal">
            <i class="bi bi-x-circle"></i>
          </button>
        </div>

        @include('web.auth.login')
        
        @include('web.auth.register')
      </div>
    </div>
  </div>
</div>