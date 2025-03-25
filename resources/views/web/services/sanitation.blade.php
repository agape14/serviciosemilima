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
                <img src="{{ asset('images/services/icon2.png') }}" class="mb-3" width="100" height="100" alt="Ícono" title="Ícono">
                <div class="position-relative mb-4">
                    <h4 class="text-blue-light text-uppercase mb-0">Saneamiento</h4>
                    <h2 class="fs-1 fw-bold text-uppercase line-title pb-1 mb-0">Físico Legal</h2>
                </div>

                <h4 class="text-blue-light fw-bold text-uppercase mb-0">¡Proteje tu bien y asegura tu futuro!</h4>
            </div>
        </div>
    </div>
</section>

<section class="position-relative py-3">
    <div class="container">
        <div class="row gx-5 gy-3">
            <div class="col-12 col-lg-6">
                <p class="fs-5 text-primary fw-normal mb-3">El saneamiento físico-legal es un proceso que busca regularizar la situación de una propiedad inmobiliaria. Esto implica abordar cualquier problema o irregularidad que afecte la propiedad, tanto en términos físicos como legales; mejorando su seguridad, valor y habitabilidad.</p>

                <ul class="ps-3 mb-3">
                    <li class="fs-5 text-blue-light fw-normal text-uppercase mb-2">Asesoría en soluciones legales y técnicas</li>
                </ul>

                <p class="fs-5 text-primary fw-normal mb-3">Para la inscripción de tu predio en registros públicos.</p>

                <ul class="ps-3 mb-3">
                    <li class="fs-5 text-primary fw-normal mb-2">Habilitación urbana</li>
                    <li class="fs-5 text-primary fw-normal mb-2">Memoria descriptiva</li>
                    <li class="fs-5 text-primary fw-normal mb-0">Cargas y gravámenes</li>
                </ul>

                <img src="{{ asset('/images/subasta/img/img saneamiento.png') }}" class="w-100" alt="Imagen de saneamiento" title="Imagen de saneamiento">
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