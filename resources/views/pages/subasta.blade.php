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
            <img src="images/services/icon3.png" alt="Ícono 2" width="100" height="100">
            <h4>SUBASTAS PÚBLICAS</h4>
            <h2 class="line-texto">Y PRIVADAS</h2>
        </div><!-- End Section Title -->
        <div class="container-publicas">
            <div class="left-column">
                <img src="images/subasta/img/subasta-precios.png" alt="Descripción de la imagen" ali>
            </div>
            <div class="right-column">
            <img src="images/subasta/img/botones_subasta.png" alt="Descripción de la imagen">
                <!--button class="custom-button">
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
                </button-->
            </div>
        </div>
    </section>
<!--/fin Seccion primera de imagen de subasta-->
<!--/Seccion segunda de opciones de subasta-->
<div class="section-que-es-subasta">
        <!-- Columna de la imagen -->
        <div class="column image-column">
            <img src="images/subasta/img/img subasta video 1.png" alt="Imagen de subasta">
        </div>

        <!-- Columna del texto -->
        <div class="column text-column">
            <h2>¿QUÉ ES UNA SUBASTA?</h2>
            <p>
                Una subasta es un proceso de compra y venta de bienes o servicios en el que los compradores pujan por los artículos, y el artículo se vende al mejor postor. Este método se utiliza para determinar el valor de mercado de un artículo y garantizar que se venda al precio más alto posible. Las subastas pueden ser presenciales o en línea, y son comunes en sectores como el arte, los bienes raíces y los vehículos.
            </p>
        </div>
    </div>
    <!--/Fin Seccion segunda de opciones de subasta-->
    <!--/Seccion tercera contacto de subasta-->
    <section>
        <div class="section-haztusubasta">
    <div class="container-subasta">
        <!-- Columna de la imagen -->
        <div class="column image-section">
            <h1 class="text-haztusubasta">HAZ TU SUBASTA</h1>
            <h1 class="text-connosotros">CON NOSOTROS</h1>
            <img src="images/subasta/img/img subasta 2.png" alt="Imagen de subasta">
        </div>

        <!-- Columna del formulario -->
        <div class="column form-section">
            <h2 class="text-connosotros">CONTACTANOS</h2>
            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="razon-social">Razón Social</label>
                        <input type="text" id="razon-social" name="razon-social" placeholder="Razón Social">
                    </div>
                    <div class="col">
                        <label for="dni">DNI</label>
                        <input type="text" id="dni" name="dni" placeholder="DNI">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="nombres">Nombres</label>
                        <input type="text" id="nombres" name="nombres" placeholder="Nombres">
                    </div>
                    <div class="col">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="col">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Dirección">
                    </div>
                    <div class="col">
                        <label for="distrito">Distrito</label>
                        <input type="text" id="distrito" name="distrito" placeholder="Distrito">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="descripcion">Descripción de la consulta</label>
                        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Descripción de la consulta"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="documentos">Adjuntar documentos necesarios para el análisis de su solicitud</label>
                        <input type="file" id="documentos" name="documentos">
                    </div>
                </div>

                <div class="form-row">
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
