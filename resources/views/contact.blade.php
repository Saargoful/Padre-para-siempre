
@extends('partials.master')
@section('title', 'Contacto')
@include('partials.nav')
@section('content')



<section class="container mt-5">
    <form action="{{ route('contact.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="100" pattern="[A-Za-z\s]+" placeholder="Ingrese su nombre">
           
            @error("nombre")
            <p><strong>{{$message}}</strong></p>
            @enderror

        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="100" placeholder="Ingrese su email">
           
            @error("email")
            <p><strong>{{$message}}</strong></p>
            @enderror
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required minlength="10" maxlength="12" pattern="[0-9]+" placeholder="Ingrese su teléfono">
            @error("telefono")
            <p><strong>{{$message}}</strong></p>
            @enderror
        </div>
        <div class="form-group">
            <label for="asunto">Asunto:</label>
            <input type="text" class="form-control" id="asunto" name="asunto" required maxlength="100" placeholder="Ingrese el asunto">
            @error("asunto")
            <p><strong>{{$message}}</strong></p>
            @enderror
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" required placeholder="Escriba su mensaje"></textarea>
            @error("mensaje")
            <p><strong>{{$message}}</strong></p>
            @enderror
        </div>

        
        {{-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="ofertas" name="ofertas" value="1">
            <label class="form-check-label" for="ofertas">¿Quiere recibir información de ofertas o promociones?</label>

            @error('ofertas')
            <p><strong>{{ $message }}</strong></p>
            @enderror
        </div> --}}

<br>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</section>

{{-- <section>
<form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required maxlength="100" pattern="[A-Za-z\s]+">
        </div>

        @error("nombre")
        <p><strong>{{$message}}</strong></p>
        @enderror

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required maxlength="100">
        </div>

        @error("email")
        <p><strong>{{$message}}</strong></p>
        @enderror

        <div>
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" required minlength="10" maxlength="12" pattern="[0-9]+">
        </div>

        @error("telefono")
        <p><strong>{{$message}}</strong></p>
        @enderror
        
        <div>
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" required maxlength="100">
        </div>

        @error("asunto")
        <p><strong>{{$message}}</strong></p>
        @enderror

        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required ></textarea>
        </div>

        @error("mensaje")
        <p><strong>{{$message}}</strong></p>
        @enderror

        <div>
            <input type="checkbox" id="ofertas" name="ofertas" Value="1">
            <label for="ofertas">¿Quiere recibir información de ofertas o promociones?</label>
        </div>
        @error('ofertas')
        <p><strong>{{ $message }}</strong></p>
        @enderror
        

        <button type="submit">Enviar</button>
    </form>
</section> --}}

        @if (session('info'))

        <script>
            alert("{{session('info')}}");
        </script>

        @endif
@endsection