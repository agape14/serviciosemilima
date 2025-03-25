@extends('layouts.app')

@section('title', 'Servicios - Servicios EmiLima')

@section('content')

<header class="position-relative w-100">
    <img src="{{ asset('/images/subasta/hero-carousel/hero-carousel-1.png') }}" class="d-block w-100 h-auto" alt="Banner de servicios" title="Banner de servicios">
</header>

<section class="position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <img src="{{ asset('images/services/icon1.png') }}" class="mb-3" width="100" height="100" alt="Ícono" title="Ícono">
                <div class="position-relative mb-4">
                    <h4 class="text-blue-light text-uppercase mb-0">Asesoría</h4>
                    <h2 class="fs-1 fw-bold text-uppercase line-title pb-1 mb-0">Inmobiliaria</h2>
                </div>

                <h5 class="text-primary fw-medium text-uppercase mb-2">¿Deseas comprar, alquilar o subastar un inmueble?</h6>
                <h4 class="text-blue-light fw-bold text-uppercase mb-0">¡Asesorate con nuestros expertos!</h4>
            </div>
        </div>
    </div>
</section>

<section class="position-relative py-3">
    <div class="container">
        <div class="row gx-5 gy-3">
            <div class="col-12 col-lg-6">
                <p class="fs-5 text-primary fw-normal mb-3">Ofrecemos, a través de nuestros especialistas, orientación y asistencia profesional a personas naturales o jurídicas en la compra, venta, alquiler o gestión de propiedades inmobiliarias.</p>

                <ul class="ps-3 mb-3">
                    <li class="fs-5 text-primary fw-normal mb-2">Estudios de títulos</li>
                    <li class="fs-5 text-primary fw-normal mb-2">Búsqueda de Partidas Registrales</li>
                    <li class="fs-5 text-primary fw-normal mb-0">Estudios del Mercdo Inmobiliario</li>
                </ul>

                <img src="{{ asset('/images/subasta/img/img asesoria.png') }}" class="w-100" alt="Imagen de subasta" title="Imagen de subasta">
            </div>

            <div class="col-12 col-lg-6">
                @include('web.sections.contact-form', ['contact_form_note' => '*Este servicio tiene como objetivo brindar información y orientación sobre precios ubicados en Lima Metropolitana.'])
            </div>
        </div>
    </div>
</section>

@include('web.sections.features')

@include('web.sections.contact')

@endsection