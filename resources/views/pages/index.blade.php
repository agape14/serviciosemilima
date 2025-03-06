@extends('layouts.app')

@section('title', 'Inicio - Servicio SemiLima')

@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="images/hero-carousel/hero-carousel-1.png" alt="">

        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="images/hero-carousel/hero-carousel-2.png" alt="">
          <div class="carousel-container">
            <!--div>
              <p>Doral, Florida</p>
              <h2><span>247</span> Venda Road Five</h2>
              <a href="property-single.html" class="btn-get-started">sale | $ 356.000</a>
            </div-->
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="images/hero-carousel/hero-carousel-3.png" alt="">
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

    </section><!-- /Hero Section -->
    <!-- Search Section -->
    <section id="search">
      <div>
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h4>¿QUE ESTAS</h4>
          <h2 class="line-texto">BUSCANDO?</h2>
          <h6>ENCUENTRA EL INMUEBLE IDEAL PARA TI</h6>
        </div><!-- End Search Title -->
        <div >
          <div class="tabs">
            <div class="tab-container">
              <div id="tab3" class="tab">
                <a href="#tab3">ALQUILAR</a>
                <div class="tab-content">
                  <div class="form-group">
                    <div class="form-field">
                      <label for="tipo-vivienda">Elige tu tipo de vivienda:</label>
                      <select id="tipo-vivienda">
                        <option>Departamento</option>
                        <option>Casa</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="ubicacion">Elige tu ubicación:</label>
                      <select id="ubicacion">
                        <option>Lima</option>
                        <option>Otra ciudad</option>
                      </select>
                    </div>
                    <input type="submit" value="Buscar">
                  </div>
                </div>
              </div>
              <div id="tab2" class="tab">
                <a href="#tab2">VENDER</a>
                <div class="tab-content">
                  <div class="form-group">
                    <div class="form-field">
                      <label for="tipo-vivienda">Elige tu tipo de vivienda:</label>
                      <select id="tipo-vivienda">
                        <option>Departamento</option>
                        <option>Casa</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="ubicacion">Elige tu ubicación:</label>
                      <select id="ubicacion">
                        <option>Lima</option>
                        <option>Otra ciudad</option>
                      </select>
                    </div>
                    <input type="submit" value="Buscar">
                  </div>
                </div>
              </div>
              <div id="tab1" class="tab">
                <a href="#tab1">COMPRAR</a>
                <div class="tab-content">
                  <div class="form-group">
                    <div class="form-field">
                      <label for="tipo-vivienda">Elige tu tipo de vivienda:</label>
                      <select id="tipo-vivienda">
                        <option>Departamento</option>
                        <option>Casa</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="ubicacion">Elige tu ubicación:</label>
                      <select id="ubicacion">
                        <option>Lima</option>
                        <option>Otra ciudad</option>
                      </select>
                    </div>
                    <input type="submit" value="Buscar">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Search Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h4>NUESTROS</h4>
        <h2 class="line-texto">SERVICIOS</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <section class="columnas-section">
          <!-- Columna 1 -->
          <div class="columna">
            <img src="images/services/icon1.png" alt="Ícono 1">
            <h5>ASESORÍA <br>INMOBILIARIA</h5>
            <button class="boton">Ver más</button>
          </div>

          <!-- Columna 2 -->
          <div class="columna">
            <img src="images/services/icon2.png" alt="Ícono 2">
            <h5>SANEAMIENTO <br>FISICO LEGAL</h5>
            <button class="boton">Ver más</button>
          </div>

          <!-- Columna 3 -->
          <div class="columna">
            <img src="images/services/icon3.png" alt="Ícono 3">
            <h5>SUBASTAS PÚBLICAS <br>Y PRIVADAS</h5>
            <button class="boton">Ver más</button>
          </div>

          <!-- Columna 4 -->
          <div class="columna">
            <img src="images/services/icon4.png" alt="Ícono 4">
            <h5>ADMINISTRACIÓN DE PATRIMONIO INMOBILIARIO</h5>
            <button class="boton">Ver más</button>
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

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

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
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="images/testimonials/testimonials-1.png" class="testimonial-img" alt="">
                  <h3>SANEAMIENTO LEGAL</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">

                <div class="profile mt-auto">
                  <img src="images/testimonials/testimonials-2.png" class="testimonial-img" alt="">
                  <h3>SUBASTA</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">

                <div class="profile mt-auto">
                  <img src="images/testimonials/testimonials-3.png" class="testimonial-img" alt="">
                  <h3>ASESORÍAS Y CAPACITACIONES</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">

                <div class="profile mt-auto">
                  <img src="images/testimonials/testimonials-4.png" class="testimonial-img" alt="">
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
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush
