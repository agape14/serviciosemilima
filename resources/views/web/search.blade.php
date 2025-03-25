@extends('layouts.app')

@section('title', 'Buscar - Servicios EmiLima')

@section('content')

<header class="position-relative w-100">
    <img src="{{ asset('/images/buscar/slider-que-estas-buscando.png') }}" class="d-block w-100 h-auto" alt="Banner de servicios" title="Banner de servicios">
</header>

<!-- Search Section -->
<section class="position-relative overflow-hidden py-5" id="search-section">
    <div class="container">
      <div class="row gy-5">
        <div class="col-12 text-center" data-aos="fade-up">
            <p class="fs-6 text-uppercase mb-0 fw-bold">Encuentra el inmueble ideal para ti</p>
        </div>
  
        <div class="col-12 col-lg-8 offset-lg-2">
          <x-tab-search></x-tab-search>
        </div>
      </div>
    </div>
  </section>

<div class="row py-5 justify-content-md-center">

    <div class="container mb-3">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid" style="background-color:rgba(128, 128, 128, 0.212)">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb fw-bold mt-3">
                    <li class="breadcrumb-item">COMPRAR</li>
                    <li class="breadcrumb-item active">Departamento</li>
                    <li class="breadcrumb-item active">Lima</li>
                </ol>
            </nav>
          </div>
        </nav>
      </div>



        <div class="col col-auto">


            <div class="row g-3 mb-4">
                <div class="col-sm-4">
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control fw-bold" placeholder="Ingresa departamentos o distritos" aria-label="Ingresa departamentos o distritos" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                          </svg></span>
                      </div>
                </div>
                <div class="col-sm">
                    <select class="form-select form-select-sm fw-bold" aria-label="Default select example">
                        <option selected>Seleccione...</option>
                        <option value="1">Comprar</option>
                        <option value="2">Alquilar</option>
                        <option value="3">Vender</option>
                      </select>
                </div>
                
                <div class="col-sm">
                    <select class="form-select form-select-sm fw-bold" aria-label="Default select example">
                        <option selected>Seleccione...</option>
                        <option value="1">Inmueble</option>
                        <option value="2">Casa</option>
                        <option value="3">Quinta</option>
                      </select>
                </div>

                <div class="col-sm">
                    <select class="form-select form-select-sm fw-bold" aria-label="Default select example">
                        <option selected>Seleccione...</option>
                        <option value="1">1 dormitorio</option>
                        <option value="2">2 dormitorios</option>
                        <option value="3">3 dormitorios</option>
                      </select>
                </div>

                <div class="col-sm">
                    <select class="form-select form-select-sm fw-bold" aria-label="Default select example">
                        <option selected>Seleccione...</option>
                        <option value="1">Precio</option>
                        <option value="2">Fecha</option>
                        <option value="3">Publicaci&oacute;n</option>
                      </select>
                </div>
              </div>


                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('/images/buscar/galeria.png') }}" class="img-fluid h-100 rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">S/510 435 &nbsp;&nbsp; USD 139 435</h5>
                        <p class="card-text">Direcci&oacute;n exacta</p>
                        <p class="card-text">Distrito</p>
                        <p class="card-text">100m2 5 Dormitorio 4 Baños</p>

                        <a href="#" class="btn btn-secondary w-100">Lo quiero</a>

                        </div>
                    </div>
                    </div>
                </div>
                <!----------------->
                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('/images/buscar/galeria.png') }}" class="img-fluid h-100 rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">S/510 435 &nbsp;&nbsp; USD 139 435</h5>
                        <p class="card-text">Direcci&oacute;n exacta</p>
                        <p class="card-text">Distrito</p>
                        <p class="card-text">100m2 5 Dormitorio 4 Baños</p>

                        <a href="#" class="btn btn-secondary w-100">Lo quiero</a>

                        </div>
                    </div>
                    </div>
                </div>
                <!----------------->
                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('/images/buscar/galeria.png') }}" class="img-fluid h-100 rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">S/510 435 &nbsp;&nbsp; USD 139 435</h5>
                        <p class="card-text">Direcci&oacute;n exacta</p>
                        <p class="card-text">Distrito</p>
                        <p class="card-text">100m2 5 Dormitorio 4 Baños</p>

                        <a href="#" class="btn btn-secondary w-100">Lo quiero</a>

                        </div>
                    </div>
                    </div>
                </div>
        </div>
</div>

<!------- CONTACTOS ----->

@include('web.sections.contact')