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
                <img src="{{ asset('images/services/icon4.png') }}" class="mb-3" width="100" height="100" alt="Ícono" title="Ícono">
                <div class="position-relative mb-4">
                    <h4 class="text-blue-light text-uppercase mb-0">Administración de</h4>
                    <h2 class="fs-1 fw-bold text-uppercase line-title pb-1 mb-0">Patrimonio Inmobiliario</h2>
                </div>

                <h4 class="text-blue-light fw-bold text-uppercase mb-0">¡Rentabiliza correctamente tu inmueble!</h4>
            </div>
        </div>
    </div>
</section>

<section class="position-relative py-3">
    <div class="container">
        <div class="row gx-5 gy-3">
            <div class="col-12 col-lg-6">
                <p class="fs-5 text-primary fw-normal mb-3">Administramos tu patrimonio inmobiliario para maximizar su valor y la rentabilidad, a través de su gestión y supervisión, administración de alquileres, gestión financiera, asesoramiento legal, la planificación y estrategia para optimizar cada proceso.</p>

                <ul class="ps-3 mb-3">
                    <li class="fs-5 text-primary fw-normal mb-2">Servicio de <strong>Elaboración de Directivas</strong> para administración de bienes inmuebles del Margesí inmobiliario.</li>
                    <li class="fs-5 text-primary fw-normal mb-0">Servicio de <strong>Elaboración de Margesí Inmobiliario</strong> (inspecciones de predios de propiedad de terceros, a fin de elaborar el margesí).</li>
                </ul>

                <img src="{{ asset('/images/subasta/img/img administracion.png') }}" class="w-100" alt="Imagen de administracion" title="Imagen de administracion">
            </div>

            <div class="col-12 col-lg-6">
                @include('web.sections.contact-form', ['contact_form_note' => '*Este servicio está dirigido a entidades públicas y privadas de todo el Perú.'])
            </div>
        </div>
    </div>
</section>

@include('web.sections.features')

@include('web.sections.contact')

@endsection