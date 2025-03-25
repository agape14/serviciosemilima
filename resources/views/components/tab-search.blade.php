<ul class="nav nav-tabs" id="search-form" role="tablist">
  <li class="nav-item">
    <button type="button" class="nav-link fw-bolder text-uppercase rounded-top-4 active" data-type="buy" onclick="changeTab('search-form', this)">Comprar</button>
  </li>
  <li class="nav-item">
    <button type="button" class="nav-link fw-bolder text-uppercase" data-type="rent" onclick="changeTab('search-form', this)">Alquilar</button>
  </li>
  <li class="nav-item">
    <button type="button" class="nav-link fw-bolder text-uppercase" data-type="auction" onclick="changeTab('search-form', this)">Subasta</button>
  </li>
</ul>

<div class="tab-content tab-container rounded-end-4 rounded-bottom-4">
  <div class="tab-pane fade show active">
    <form class="row row-cols-lg-3 row-cols-md-3 g-3 align-items-center" action="/buscar" method="GET">
      <input type="hidden" value="buy" id="search-type">

      <div class="col-12">
        <label class="form-label" for="inlineFormInputGroupUsername"><h6 class="fw-bold">Elige tu tipo de vivienda:</h6></label>
        <select class="form-select rounded-5 fw-bold" id="inlineFormSelectPref">
          <option value="" selected>Seleccione...</option>
          <option value="1">Apartamento</option>
          <option value="2">Áticos</option>
          <option value="2">Barracas</option>
          <option value="2">Bungalows</option>
          <option value="2">Cabañas</option>
          <option value="2">Chabolas</option>
          <option value="2">Chalets</option>
        </select>
      </div>
    
      <div class="col-12">
          <label class="form-label" for="inlineFormInputGroupUsername"><h6 class="fw-bold">Elige tu ubicación:</h6></label>
          <select class="form-select rounded-5 fw-bold" id="inlineFormSelectPref">
            <option value="" selected>Seleccione...</option>
            <option value="1">Lima</option>
            <option value="2">Arequipa</option>
            <option value="2">Trujillo</option>
            <option value="2">Callao</option>
            <option value="2">Pisco</option>
            <option value="2">Cuzco</option>
            <option value="2">Iquitos</option>
            <option value="2">Puno</option>
            <option value="2">Piura</option>
          </select>
        </div>
    
      <div class="col-12">
        <label class="form-label" for=""> </label>
        <button type="submit" class="btn btn-lg rounded-4 btn-dark"><p class="text-center my-2 mx-4 fw-bold">Buscar</p></button>
      </div>
    </form>
  </div>
</div>