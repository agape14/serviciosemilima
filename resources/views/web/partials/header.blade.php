<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="{{ route('web.home') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('/images/logo.png') }}" alt="Logo" title="Logo">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li>
          <a href="#" class="btn-men">NOSOTROS</a>
        </li>
        <li class="dropdown">
          <a href="#" class="btn-men">SERVICIOS<i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li>
              <a href="{{ route('web.services.consultancies') }}">Asesoría Inmobiliaria</a>
            </li>
            <li>
              <a href="{{ route('web.services.sanitation') }}">Saneamiento Físico Legal</a>
            </li>
            <li>
              <a href="{{ route('web.services.auction') }}">Subastas Públicas y Privadas</a>
            </li>
            <li>
              <a href="{{ route('web.services.administration') }}">Administración de Patrimonio Inmobiliario</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" class="btn-men">PROPIEDADES</a>
        </li>
        <li>
          <a href="#" class="btn-men">EMPRESAS</a>
        </li>
        <li>
          <a href="#" class="btn-contact">Contáctenos</a>
        </li>
      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>