@extends('layouts.app')

@section('title', 'Servicios - Servicio SemiLima')

@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="section">
      <div class="section-interno">
      <img src="images/subasta/hero-carousel/hero-carousel-1.png" alt="" >
      </div>
    </section><!-- /Hero Section -->
    <!--/Seccion primera de imagen de subasta-->
    <div class="section-subasta">
        <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h4>SUBASTAS PÚBLICAS</h4>
        <h2 class="line-texto">Y PRIVADAS</h2>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="left-column">
            <img src="images/subasta/img/subasta-precios.png" alt="Descripción de la imagen">
        </div>
        <div class="right-column">
            <button class="custom-button">
                <img src="images/subasta/img/bot subasta 1.png" alt="Lupa" class="icono">
                <span class="text">ENCUENTRA TU TERRENO</span>
            </button>
            <button class="custom-button">
            <img src="images/subasta/img/bot subasta 2.png" alt="Cash" class="icono">
                <span class="text">COMPRA TU BASE</span>
            </button>
            <button class="custom-button">
            <img src="images/subasta/img/bot subasta 3.png" alt="Wa" class="icono">
                <span class="text">CONTÁCTANOS</span>
            </button>
            <button class="custom-button">
            <img src="images/subasta/img/bot subasta 4.png" alt="Doc" class="icono">
                <span class="text">PASOS PARA LA INSCRIPCIÓN</span>
            </button>
        </div>
        </div>
    </div>
<!--/fin Seccion primera de imagen de subasta-->
<!--/Seccion segunda de opciones de subasta-->
<div class="section-opciones">
        <h3 class="texto-subasta">OPCIONES PARA TI</h3>
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
