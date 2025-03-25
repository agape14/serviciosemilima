@extends('layouts.app')

@section('title', 'Inicio - Servicios EmiLima')

@section('content')

<!-- Hero Section -->
<section class="hero section" id="hero">
  <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" id="hero-carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <picture>
          <source media="(max-width: 768px)" srcset="{{ asset('/images/hero-carousel/emilima-v2-mobile-cover.png') }}">
          <source media="(min-width: 769px)" srcset="{{ asset('/images/hero-carousel/hero-carousel-1.png') }}">
          <img src="{{ asset('/images/hero-carousel/hero-carousel-1.png') }}" class="header-image d-block w-100" alt="Descripción de la imagen" title="Descripción de la imagen">
        </picture>
      </div>

      <div class="carousel-item">
        <picture>
          <source media="(max-width: 768px)" srcset="{{ asset('/images/hero-carousel/emilima-v2-mobile-cover.png') }}">
          <source media="(min-width: 769px)" srcset="{{ asset('/images/hero-carousel/hero-carousel-1.png') }}">
          <img src="{{ asset('/images/hero-carousel/hero-carousel-1.png') }}" class="header-image d-block w-100" alt="Descripción de la imagen" title="Descripción de la imagen">
        </picture>
      </div> 

      <div class="carousel-item">
        <picture>
          <source media="(max-width: 768px)" srcset="{{ asset('/images/hero-carousel/emilima-v2-mobile-cover.png') }}">
          <source media="(min-width: 769px)" srcset="{{ asset('/images/hero-carousel/hero-carousel-1.png') }}">
          <img src="{{ asset('/images/hero-carousel/hero-carousel-1.png') }}" class="header-image d-block w-100" alt="Descripción de la imagen" title="Descripción de la imagen">
        </picture>
      </div> 
    </div>
    
    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <div class="carousel-indicators">
      <button type="button" class="active" data-bs-target="#hero-carousel" data-bs-slide-to="0" aria-current="true"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"></button>
    </div>
  </div>
</section>
<!-- /Hero Section -->

<!-- Search Section -->
<section class="position-relative overflow-hidden py-5" id="search-section">
  <div class="container">
    <div class="row gy-5">
      <div class="col-12 text-center" data-aos="fade-up">
        <div class="position-relative mb-4">
          <h4 class="text-uppercase mb-0">¿Que estas</h4>
          <h2 class="fs-1 fw-bold text-uppercase line-title pb-1 mb-0">Buscando?</h2>
        </div>
        <p class="fs-6 text-uppercase mb-0">Encuentra el inmueble ideal para ti</p>
      </div>

      <div class="col-12 col-lg-8 offset-lg-2">
        <x-tab-search></x-tab-search>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="position-relative overflow-hidden py-5" id="services-section">
  <div class="container">
    <div class="row gy-3">
      <div class="col-12 text-center" data-aos="fade-up">
        <div class="position-relative mb-4">
          <h4 class="text-uppercase mb-0">Nuestros</h4>
          <h2 class="fs-1 fw-bold text-uppercase line-title pb-1 mb-0">Servicios</h2>
        </div>
      </div>

      <div class="col-12">
        <div class="row gy-5">
          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <a href="{{ route('web.services.consultancies') }}">
              <img src="{{ asset('images/services/icon1.png') }}" class="mb-4" width="140" height="140" alt="EMILIMA" title="EMILIMA">
            </a>
            <h5 class="fs-6 text-center fw-bold text-uppercase mb-3">Asesoría<br>Inmobiliaria</h5>
            <a href="{{ route('web.services.consultancies') }}" class="btn btn-outline-primary fw-bold rounded-4 px-5">Ver más</a>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <a href="{{ route('web.services.sanitation') }}">
              <img src="{{ asset('images/services/icon2.png') }}" class="mb-4" width="140" height="140" alt="EMILIMA" title="EMILIMA">
            </a>
            <h5 class="fs-6 text-center fw-bold text-uppercase mb-3">Saneamiento<br>Físico Legal</h5>
            <a href="{{ route('web.services.sanitation') }}" class="btn btn-outline-primary fw-bold rounded-4 px-5">Ver más</a>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <a href="{{ route('web.services.auction') }}">
              <img src="{{ asset('images/services/icon3.png') }}" class="mb-4" width="140" height="140" alt="EMILIMA" title="EMILIMA">
            </a>
            <h5 class="fs-6 text-center fw-bold text-uppercase mb-3">Subastas Públicas<br>Y Privadas</h5>
            <a href="{{ route('web.services.auction') }}" class="btn btn-outline-primary fw-bold rounded-4 px-5">Ver más</a>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <a href="{{ route('web.services.administration') }}">
              <img src="{{ asset('images/services/icon4.png') }}" class="mb-4" width="140" height="140" alt="EMILIMA" title="EMILIMA">
            </a>
            <h5 class="fs-6 text-center fw-bold text-uppercase mb-3">Administración De<br>Patrimonio Inmobiliario</h5>
            <a href="{{ route('web.services.administration') }}" class="btn btn-outline-primary fw-bold rounded-4 px-5">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section -->

<!-- Revista Section -->
<section class="position-relative py-5">
  <div class="bg-blue-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center text-sm-start text-lg-center">
          <h3 class="fs-2 text-primary fw-bolder text-uppercase mb-3">Tu revista inmobiliaria</h3>
          <h4 class="w-100 w-sm-50 text-white text-uppercase mx-auto mx-sm-0 mx-lg-auto mb-3">Mantente al día con las novedades que trae Emilima para ti</h4>
          <a href="javascript:void(0);" class="btn btn-primary fw-normal rounded-pill px-4">Descargar aquí</a>
        </div>
      </div>
    </div>
  </div>

  <img src="{{ asset('/images/revista/revista.png') }}" class="d-none d-sm-block position-absolute top-0 end-0 h-100" alt="Revista" title="Revista">
</section>
<!-- Revista Section -->

@include('web.sections.features')

@include('web.sections.contact')

@endsection