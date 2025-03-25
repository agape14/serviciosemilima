@extends('layouts.app')

@section('title', 'Servicios - Servicios EmiLima')

@section('content')

<header class="position-relative w-100">
    <img src="{{ asset('/images/subasta/hero-carousel/hero-carousel-1.png') }}" class="d-block w-100 h-auto" alt="Banner de servicios" title="Banner de servicios">
</header>

<section class="position-relative py-5">
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <img src="{{ asset('/images/services/icon3.png') }}" class="mb-3" width="100" height="100" alt="Ícono" title="Ícono">
                <div class="position-relative mb-4">
                    <h4 class="text-blue-light text-uppercase mb-0">Subastas Públicas</h4>
                    <h2 class="fs-1 fw-bold text-uppercase line-title pb-1 mb-0">Y Privadas</h2>
                </div>

                <h4 class="text-blue-light fw-bold text-uppercase mb-0">¡Proteje tu bien y asegura tu futuro!</h4>
            </div>

            <div class="col-12">
                <div class="row gx-5 gy-3">
                    <div class="col-12 col-md-6 col-lg-6">
                        <img src="{{ asset('/images/subasta/img/subasta-precios.png') }}" class="w-100 h-100" alt="Descripción de la imagen" title="Descripción de la imagen">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <img src="{{ asset('/images/subasta/img/botones_subasta.png') }}" class="w-100 h-100" alt="Descripción de la imagen" title="Descripción de la imagen">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-secondary position-relative py-5">
    <div class="container">
        <div class="row gy-3 gx-5">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <img src="{{ asset('/images/subasta/img/img subasta video 1.png') }}" class="w-100" alt="Imagen de subasta" title="Imagen de subasta">
            </div>

            <div class="col-12 col-lg-6 d-flex align-items-center">
                <div>
                    <h2 class="fs-2 text-white fw-bolder text-uppercase mb-2">¿Qué es una subasta?</h2>
                    <p class="fs-5 text-white fw-normal mb-3">Una subasta es un proceso en el que se ofrecen bienes o servicios, para venta o alquiler. En él se establece un precio base a cada bien, así como un monto de puja, para que los participantes compitan realizando su oferta; siendo el que se adjudique el mejor postor que realice la oferta más alta.</p>
                    <p class="fs-5 text-white fw-normal mb-0">Existen diferentes tipos de subastas, entre ellas se encuentran las públicas y privadas, así como las presenciales, virtuales y modalidad mixta.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-secondary-subtle position-relative py-5">
    <div class="container">
        <div class="row gx-5 gy-3">
            <div class="col-12 col-lg-6">
                <h1 class="text-primary fw-bolder text-uppercase mb-0">Haz tu subasta</h1>
                <h2 class="fs-1 text-secondary fw-bolder text-uppercase mb-3">Con nosotros</h2>

                <img src="{{ asset('/images/subasta/img/img subasta 2.png') }}" class="w-100" alt="Imagen de subasta" title="Imagen de subasta">
            </div>

            <div class="col-12 col-lg-6">
                @include('web.sections.contact-form', ['contact_form_color' => 'bg-white', 'contact_title_color' => 'text-secondary', 'contact_label_color' => 'text-primary', 'contact_label_file_color' => 'text-primary', 'contact_btn_color' => 'btn-secondary'])
            </div>
        </div>
    </div>
</section>

@include('web.sections.features')

@include('web.sections.contact')

@endsection