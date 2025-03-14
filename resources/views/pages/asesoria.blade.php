@extends('layouts.app')

@section('title', 'Servicios - Servicios EmiLima')

@section('content')
<main class="main">
    <!--Banner Section -->
    <header class="banner">
    <img src="images/subasta/hero-carousel/hero-carousel-1.png" alt="Banner de servicios" class="banner-image">
    </header>
    <!-- /Banner Section -->
    <!--/Seccion primera de imagen de subasta-->
    <section id="section-subasta">
        <!-- Section Title -->
        <div>    
            <div class="container section-title" data-aos="fade-up">
            <img src="images/services/icon1.png" alt="Ícono 1" width="100" height="100">
            <h4>ASESORÍA</h4>
            <h2 class="line-texto">INMOBILIARIA</h2>
          <h6>¿DESEAS COMPRAR, ALQUILAR O SUBASTAR UN INMUEBLE?</h6>
          <h4>¡ASESORATE CON UN EXPERTO!</h4>
        </div><!-- End Section Title -->
        <!--SECCION-->
        <!--/FIN SECCION-->
    <section>
        <div class="section-asesoria">
    <div class="container-subasta">
        <!-- Columna de la imagen -->
        <div class="column image-section">
            <p>Ofrecemos, a través de nuestros especialistas, orientación y asistencia profesional a personas naturales o jurídicas en la compra, alquiler, subasta o gestión de propiedades inmobiliarias</p>
            <ul class="lista-con-puntos">
              <li>Estudios de títulos</li>
              <li>Búsqueda de Partidas Registrales</li>
              <li>Estudios del Mercdo Inmobiliario</li>
            </ul>
            <img src="images/subasta/img/img asesoria.png" alt="Imagen de subasta">
        </div>

        <!-- Columna del formulario -->
        <div class="column form-section-asesoria">
            <h2 class="text-contacto">CONTACTANOS</h2>
            <form>
                <div class="form-asesoria-row">
                    <div class="col">
                        <label for="razon-social">Razón Social</label>
                        <input type="text" id="razon-social" name="razon-social" placeholder="Razón Social">
                    </div>
                    <div class="col">
                        <label for="dni">DNI</label>
                        <input type="text" id="dni" name="dni" placeholder="DNI">
                    </div>
                </div>

                <div class="form-asesoria-row">
                    <div class="col">
                        <label for="nombres">Nombres</label>
                        <input type="text" id="nombres" name="nombres" placeholder="Nombres">
                    </div>
                    <div class="col">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
                    </div>
                </div>

                <div class="form-asesoria-row">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="col">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
                    </div>
                </div>

                <div class="form-asesoria-row">
                    <div class="col">
                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Dirección">
                    </div>
                    <div class="col">
                        <label for="distrito">Distrito</label>
                        <input type="text" id="distrito" name="distrito" placeholder="Distrito">
                    </div>
                </div>

                <div class="form-asesoria-row">
                    <div class="col">
                        <label for="descripcion">Descripción de la consulta</label>
                        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Descripción de la consulta"></textarea>
                    </div>
                </div>

                <div class="form-asesoria-row">
                    <div class="col">
                        <label for="documentos">Adjuntar documentos necesarios para el análisis de su solicitud</label>
                        <input type="file" id="documentos" name="documentos">
                    </div>
                </div>

                <div class="form-asesoria-row">
                    <div class="col">
                        <button type="submit">Enviar solicitud</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </section>
    <!--/Fin Seccion tercera contacto de subasta-->
<!-- Destacados Section -->
<section id="destacados" class="destacados section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2 class="line-texto">DESTACADOS</h2>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 40
          },
          "1200": {
            "slidesPerView": 3,
            "spaceBetween": 1
          }
        }
      }
    </script>
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="destacados-item">
          <div class="profile mt-auto">
            <img src="images/destacados/destacados-1.png" class="destacados-img" alt="">
            <h3>SANEAMIENTO LEGAL</h3>
          </div>
        </div>
      </div><!-- End destacados item -->

      <div class="swiper-slide">
        <div class="destacados-item">

          <div class="profile mt-auto">
            <img src="images/destacados/destacados-2.png" class="destacados-img" alt="">
            <h3>SUBASTA</h3>
          </div>
        </div>
      </div><!-- End destacados item -->

      <div class="swiper-slide">
        <div class="destacados-item">

          <div class="profile mt-auto">
            <img src="images/destacados/destacados-3.png" class="destacados-img" alt="">
            <h3>ASESORÍAS Y CAPACITACIONES</h3>
          </div>
        </div>
      </div><!-- End destacados item -->
      <div class="swiper-slide">
        <div class="destacados-item">

          <div class="profile mt-auto">
            <img src="images/destacados/destacados-4.png" class="destacados-img" alt="">
            <h3>ADMINISTRACIÓN DE PATRIMONIO</h3>
          </div>
        </div>
      </div><!-- End destacados item -->
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- End destacados section -->
<!-- /Consulta Section -->
<section class="contacto-section">
<!-- Texto principal -->
<h3>PARA MÁS CONSULTAS CONTÁCTANOS AL</h3>

<!-- Contenedor de botones -->
<div class="botones-container">
  <!-- Botón con ícono de teléfono -->
  <button class="boton">
    <img src="images/fono2.png" alt="Teléfono" class="icono">
    <span>209-8400</span>
  </button>

  <!-- Botón con ícono de WhatsApp -->
  <button class="boton">
    <img src="images/wa.png" alt="WhatsApp" class="icono">
    <span>123-456-789</span>
  </button>
</div>

<!-- Texto del correo -->
<p class="correo">serviciosinmobiliarios@emilima.com.pe</p>
</section>
</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
