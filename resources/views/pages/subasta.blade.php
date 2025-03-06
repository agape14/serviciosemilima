@extends('layouts.app')

@section('title', 'Nosotros - Servicio SemiLima')

@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="images/subasta/hero-carousel/hero-carousel-1.png" alt="">

        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="images/subasta/hero-carousel/hero-carousel-2.png" alt="">
          <div class="carousel-container">
            <!--div>
              <p>Doral, Florida</p>
              <h2><span>247</span> Venda Road Five</h2>
              <a href="property-single.html" class="btn-get-started">sale | $ 356.000</a>
            </div-->
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="images/subasta/hero-carousel/hero-carousel-3.png" alt="">
          <div class="carousel-container">
            <!--div>
              <p>Doral, Florida</p>
              <h2><span>247</span> Vitra Road three</h2>
              <a href="property-single.html" class="btn-get-started">rent | $ 3.000</a>
            </div-->
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->
    <!--/Seccion primera de imagen de subasta-->
    <div class="section-subasta">
        <div class="left-column">
            <img src="images/subasta/img/subasta-precios.png" alt="Descripción de la imagen">
        </div>
        <div class="right-column">
            <button class="custom-button">
                <img src="images/subasta/img/ico_lupa.png" alt="Lupa" class="icono">
                <span class="text">ENCUENTRA TU TERRENO</span>
            </button>
            <button class="custom-button">
            <img src="images/subasta/img/ico_compra.png" alt="Cash" class="icono">
                <span class="text">COMPRA TU BASE</span>
            </button>
            <button class="custom-button">
            <img src="images/subasta/img/ico_wa.png" alt="Wa" class="icono">
                <span class="text">CONTÁCTANOS</span>
            </button>
            <button class="custom-button">
            <img src="images/subasta/img/ico_pasos.png" alt="Doc" class="icono">
                <span class="text">PASOS PARA LA INSCRIPCIÓN</span>
            </button>
        </div>
    </div>
<!--/fin Seccion primera de imagen de subasta-->
<!--/Seccion segunda de opciones de subasta-->
<div class="section-opciones">
        <h3>OPCIONES PARA TI</h3>
        <div class="options-container">
            <div class="option" style="background-image: url('images/subasta/img/opciones_para_ti_1.png');">
                <div class="info">
                    <p>S/ 770 868.00</p>
                    <button class="more-info">MÁS INFORMACIÓN</button>
                </div>
            </div>
            <div class="option" style="background-image: url('images/subasta/img/opciones_para_ti_2.png');">
                <div class="info">
                    <p>Desde S/ 2 729 075.00</p>
                    <button class="more-info">MÁS INFORMACIÓN</button>
                </div>
            </div>
            <div class="option" style="background-image: url('images/subasta/img/opciones_para_ti_3.png');">
                <div class="info">
                    <p>S/ 17 076 209.00</p>
                    <button class="more-info">MÁS INFORMACIÓN</button>
                </div>
            </div>
        </div>
        <button class="view-all">VER TODOS LOS LOTES</button>
    </div>
    <!--/Fin Seccion segunda de opciones de subasta-->
    <!--/Seccion tercera contacto de subasta-->
    <div class="section-subasta-contacto">
        <div class="left-column-contacto">
          <div>
          <h3 class="blue-text">HAZ TU SUBASTA</h3>
          <h3 class="green-text">CON NOSOTROS</h3>
           <img src="images/subasta/img/subasta-contacto.png" alt="Descripción de la imagen">
            </div>
        </div>
        <div class="right-column-contacto">
            <form class="contact-form">
                <div class="form-row">
                    <input type="text" placeholder="Nombre Completo">
                    <input type="text" placeholder="Número de contacto">
                </div>
                <div class="form-row">
                    <input type="text" placeholder="Razón social (empresa)">
                </div>
                <div class="form-row">
                    <input type="text" placeholder="RUC (empresa)">
                </div>
                <div class="form-row">
                    <textarea placeholder="Descripción de solicitud"></textarea>
                </div>
                <div class="form-row">
                    <button type="submit">Enviar solicitud</button>
                </div>
            </form>
        </div>
    </div>
    <!--/Fin Seccion tercera contacto de subasta-->
</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush
