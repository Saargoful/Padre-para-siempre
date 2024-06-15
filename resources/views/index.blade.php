
    @extends('partials.master')
    @section('title', 'Inicio')
    @include('partials.nav')
    @section('content')


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="padding:0">

  <div class="position-relative overflow-hidden text-center bg-light">
   

      <img src="{{ asset('imagenes/1.png') }} " class="img-fluid w-100" alt="Descripción de la imagen">
    </div>
   
  </div>
</div>
  <section id="Quienes-somos">
      
<br>
<br>
<br>
<br>
                                            {{-- ¿Quienes somos? --}}
  <div div="QuienesSomos" class="content">
    <h3>¿QUIENES SOMOS?</h3>
    <p>Padres para siempre es una Asociación Civil, sin fines de lucro, fundada el 16 de febrero de 2009, por un
    grupo de padres de familia, con la intención de impulsar investigación académica y participativa,
    desarrollar herramientas de formación humana y social para ellos y sus hijos y aportar a la sociedad,
    mediante colaboraciones con el sector público y privado, propuestas y acciones que permitan prevenir
    conductas de riesgo, como los distintos tipos de violencia, suicidio, actividades delictivas, consumo de
    drogas, así como la promoción de la equidad entre hombres y mujeres, la tolerancia y la inclusión de
    sectores de la población con algún grado de marginación y/o vulnerabilidad.</p>
  </div>
      </section>

<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="padding:0">
<div>
  <img src="{{ asset('imagenes/imagen_gente.jpg') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>
    </div>
  </div>
</div>
</div>
<br>
<br>
<section id="Proyectos">
  <div>
    <a href="https://teayudamos.mx/login" target="_blank">
      <img src="{{ asset('imagenes/teayudamos.png') }}"  class="img-fluid w-100" alt="Descripción de la imagen">
    </a>
  </div>
  
  
<br>
<br>
{{-- AQUI --}}
              
<div>
  <img src="{{ asset('imagenes/ARTESANOS_FERIA.jpg') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>
</section>
<br>
<br>

<div>
  <img src="{{ asset('imagenes/banners.jpg') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>

<div>
  <img src="{{ asset('imagenes/Conmemoracion.jpg') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>

<div>
  <img src="{{ asset('imagenes/mujeres.jpg') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>

<section id="Nuestros-proyectos">
  <br>
  <br>
  <br>
  <br>
<div>
  <img src="{{ asset('imagenes/proyectos.png') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>
</section>
<br>
<div>
  <img src="{{ asset('imagenes/azul_final.png') }} " class="img-fluid w-100" alt="Descripción de la imagen">
</div>

</div>
</div>

@push('script')
@endsection

