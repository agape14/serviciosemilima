@extends('layouts.app')

@section('title', 'Inicio - Servicios EmiLima')

@section('content')
<main class="main">

    <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <picture>
          <source media="(max-width: 768px)" srcset="images/hero-carousel/emilima-v2-mobile-cover.png">
          <source media="(min-width: 769px)" srcset="images/hero-carousel/hero-carousel-1.png">
          <img src="images/hero-carousel/hero-carousel-1.png" alt="Descripción de la imagen" class="header-image">
        </picture>
      </div>
        <!-- End Carousel Item -->
      <div class="carousel-item">
        <picture>
          <source media="(max-width: 768px)" srcset="images/hero-carousel/emilima-v2-mobile-cover.png">
          <source media="(min-width: 769px)" srcset="images/hero-carousel/hero-carousel-1.png">
          <img src="images/hero-carousel/hero-carousel-1.png" alt="Descripción de la imagen" class="header-image">
        </picture>
      <div class="carousel-container">
      </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <picture>
          <source media="(max-width: 768px)" srcset="images/hero-carousel/emilima-v2-mobile-cover.png">
          <source media="(min-width: 769px)" srcset="images/hero-carousel/hero-carousel-1.png">
          <img src="images/hero-carousel/hero-carousel-1.png" alt="Descripción de la imagen" class="header-image">
        </picture>
          <div class="carousel-container">
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
    <!-- Search Section -->
    <section id="search">
      <div>
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h4 class="title-center">¿QUE ESTAS</h4>
          <h2 class="line-texto">BUSCANDO?</h2>
          <h6>ENCUENTRA EL INMUEBLE IDEAL PARA TI</h6>
        </div><!-- End Search Title -->
      </div>
  <!-- Inicio div -->
  <div>
  <!-- Pestañas -->
  <nav>
  <div class="nav nav-tabs tabs" id="nav-tab" >
    <button class="nav-link active " id="nav-comprar-tab" data-bs-toggle="tab" data-bs-target="#nav-comprar" type="button" role="tab" aria-controls="nav-comprar" aria-selected="true">COMPRAR</button>
    <button class="nav-link" id="nav-alquilar-tab" data-bs-toggle="tab" data-bs-target="#nav-alquilar" type="button" role="tab" aria-controls="nav-alquilar" aria-selected="false">ALQUILAR</button>
    <button class="nav-link" id="nav-subasta-tab" data-bs-toggle="tab" data-bs-target="#nav-subasta" type="button" role="tab" aria-controls="nav-subasta" aria-selected="false">SUBASTA</button>
  </div>
  </nav>
  <!-- Contenido de las pestañas -->
  <div class="tab-content tab-container" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-comprar" role="tabpanel" aria-labelledby="nav-comprar-tab" tabindex="0">
    <div class="tab-content">
                  <div class="form-group row">
                    <div class="form-field grid-cols-3">
                      <label for="tipo-vivienda">Elige tu tipo de vivienda:</label>
                      <select id="tipo-vivienda">
                        <option>Departamento</option>
                        <option>Casa</option>
                      </select>
                    </div>
                    <div class="form-field grid-cols-3">
                      <label for="ubicacion">Elige tu ubicación:</label>
                      <select id="ubicacion">
                        <option>Lima</option>
                        <option>Otra ciudad</option>
                      </select>
                    </div>
                    <div class="form-field grid-cols-3" >
                    <label for="buscar">Presione para buscar:</label>
                    <input type="submit" value="Buscar" >
                    </div>
                  </div>
    </div>
  <div class="tab-pane fade" id="nav-alquilar" role="tabpanel" aria-labelledby="nav-alquilar-tab" tabindex="0">
  <div class="tab-content">
                  <div class="form-group row">
                    <div class="form-field grid-cols-3">
                      <label for="tipo-vivienda">Elige tu tipo de vivienda:</label>
                      <select id="tipo-vivienda">
                        <option>Departamento</option>
                        <option>Casa</option>
                      </select>
                    </div>
                    <div class="form-field grid-cols-3">
                      <label for="ubicacion">Elige tu ubicación:</label>
                      <select id="ubicacion">
                        <option>Lima</option>
                        <option>Otra ciudad</option>
                      </select>
                    </div>
                    <div class="form-field grid-cols-3" >
                    <input type="submit" value="Buscar" >
                    </div>
                  </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-subasta" role="tabpanel" aria-labelledby="nav-subasta-tab" tabindex="0">
  <div class="tab-content">
                  <div class="form-group row">
                    <div class="form-field grid-cols-3">
                      <label for="tipo-vivienda">Elige tu tipo de vivienda:</label>
                      <select id="tipo-vivienda">
                        <option>Departamento</option>
                        <option>Casa</option>
                      </select>
                    </div>
                    <div class="form-field grid-cols-3">
                      <label for="ubicacion">Elige tu ubicación:</label>
                      <select id="ubicacion">
                        <option>Lima</option>
                        <option>Otra ciudad</option>
                      </select>
                    </div>
                    <div class="form-field grid-cols-3" >
                    <input type="submit" value="Buscar" >
                    </div>
                  </div>
    </div>
  </div>
</div>
      
</section><!-- /Search Section -->

    <!-- Services Section -->
    <section id="services" class="services section ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h4>NUESTROS</h4>
        <h2 class="line-texto">SERVICIOS</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <section class="columnas-section">
          <div class="row">
          <!-- Columna 1 -->
          <div class="columna col-lg-3">
          <a href="asesoria"><img src="images/services/icon1.png" alt="Ícono 1" width="140" height="140"></a>
            <h5>ASESORÍA <br>INMOBILIARIA</h5>
            <button class="boton"><a href="asesoria">Ver más</a></button>
          </div>

          <!-- Columna 2 -->
          <div class="columna col-lg-3">
          <a href="saneamiento"><img src="images/services/icon2.png" alt="Ícono 2" width="140" height="140"></a>
            <h5>SANEAMIENTO <br>FISICO LEGAL</h5>
            <button class="boton"><a href="saneamiento">Ver más</a></button>
          </div>

          <!-- Columna 3 -->
          <div class="columna col-lg-3">
          <a href="subasta"><img src="images/services/icon3.png" alt="Ícono 3" width="140" height="140"></a>
            <h5>SUBASTAS PÚBLICAS <br>Y PRIVADAS</h5>
            <button class="boton"><a href="subasta">Ver más</a></button>
          </div>

          <!-- Columna 4 -->
          <div class="columna col-lg-3">
            <a href="administracion"><img src="images/services/icon4.png" alt="Ícono 4" width="140" height="140"></a>
            <h5>ADMINISTRACIÓN DE <br> PATRIMONIO INMOBILIARIO</h5>
            <button class="boton"><a href="administracion">Ver más</a></button>
          </div>
          </div>
        </section>

      </div>

    </section><!-- /Services Section -->

    <!-- Revista Section -->
    <section class="revista-section">
      <!-- Contenedor del texto y el botón -->
      <div class="texto-container">
        <h3 class="azul">TU REVISTA INMOBILIARIA</h3>
        <h3 class="blanco">MANTENTE AL DÍA CON LAS NOVEDADES QUE TRAE EMILIMA PARA TI</h3>
        <button class="boton">Descargue aquí</button>
      </div>

      <!-- Imagen de la revista -->
      <img src="images/revista/revista.png" alt="Revista" class="imagen-revista">
    </section><!-- /Revista Section -->

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
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="destacados-item">

                <div class="profile mt-auto">
                  <img src="images/destacados/destacados-2.png" class="destacados-img" alt="">
                  <h3>SUBASTA</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="destacados-item">

                <div class="profile mt-auto">
                  <img src="images/destacados/destacados-3.png" class="destacados-img" alt="">
                  <h3>ASESORÍAS Y CAPACITACIONES</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="destacados-item">

                <div class="profile mt-auto">
                  <img src="images/destacados/destacados-4.png" class="destacados-img" alt="">
                  <h3>ADMINISTRACIÓN DE PATRIMONIO</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Consulta Section -->
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
