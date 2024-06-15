<header class="site-header sticky-top py-1">
    <nav class="navbar navbar-expand-md navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="/" aria-label="Product">
                <img src="{{ asset('imagenes/logo1.png') }}" alt="Logo" style="height: 80px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="/#Quienes-somos">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#Proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#Nuestros-proyectos">Nuestros Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contacto</a>
                    </li>
                    {{-- 
                    <li class="nav-item">
                        <a class="nav-link" href="https://teayudamos.mx/login" target="_blank">Te ayudamos</a>
                    </li>
                    --}}
                </ul>
            </div>
        </div>
    </nav>
  </header>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  {{-- <header class="site-header sticky-top py-1">
      <nav class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <a class="py-2" href="/" aria-label="Product">
          <img src="{{ asset('imagenes/logo1.jpeg') }}" alt="Logo" class="d-block mx-auto" style="height: 80px; width: auto;">
        </a>
        <a class="nav-link" href="#Quienes-somos">¿Quienes somos?</a>
        <a class="nav-link" href="#Proyectos">Proyectos</a>
        <a class="nav-link" href="#Nuestros-proyectos">Nuestros Proyectos</a>
        <a class="nav-link" href="/contact">Contacto</a>    
      </nav>
    </header> --}}