@extends('layouts.app')

@section('title', 'Nosotros - Servicio SemiLima')

@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <h1>aca estamos en nosotros</h1>
    </section>
</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush
