@extends('witchesTravelBase')

@section('header')
    <header class="header">
        <!-- Imagen de fondo 1 -->
        <div class="imagen imagen1"></div>
        <!-- Imagen de fondo 2 -->
        <div class="imagen imagen2"></div>
        
        <!-- Menú en la esquina superior izquierda -->
        <nav class="menu roboto-condensed-menu">
            <a href="#home">INICIO</a>
            <a href="#page">PRODUCTOS</a>
            <a href="#Contacto">CONTACTOS</a>
        </nav>

        <!-- Logo y nombre de la empresa en la esquina superior derecha -->
        <div class="logo-nombre-empresa">
            <img class="logo" src="{{ asset('/img/witchesTravelLogoSinFondo.png') }}" alt="Logo de la empresa">
            <span class="nombre-empresa">WITCHES TRAVEL</span>
        </div>
        
        <!-- Frase superpuesta en el centro izquierdo -->
        <div class="texto">
            <div class="texto1 gloria-hallelujah-regular">
                Que pasa oes!
            </div>
            <div class="texto2 lilita-one-regular">
                La fauna la borde del colapso
            </div>
        </div>
        
        <!-- Indicador de posición en la esquina inferior izquierda -->
        <div class="indicador">
            <span class="punto activo"></span>
            <span class="punto"></span>
        </div>
        
        <!-- Flechas de navegación en la esquina inferior derecha -->
        <div class="controles">
            <button class="flecha-izquierda">&#10094;</button>
            <button class="flecha-derecha">&#10095;</button>
        </div>
    </header>
@endsection

@section('main')

Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde quae, earum quia natus voluptatibus culpa vel temporibus quos sequi quibusdam aliquam veritatis? Labore earum neque delectus, vitae ratione libero minus.

{{-- Icono de Whatsapp --}}
<a href="https://wa.me/591123456789" target="_blank" class="whatsapp-float" title="Chat en WhatsApp">
    <img src="{{ asset('/img/logoWhatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon"> <!-- Puedes reemplazar con un icono de Font Awesome -->
</a>
{{-- Fin Icono de Whatsapp --}}

@endsection

 
@section('footer')
    @parent
    <footer id="Contacto">
        <div class="container-fluid">
            <div class="row uno">
                <div class="col-md-4 text-start">
                    <div class="col">
                        <div class="col titulo">
                            Informacion
                        </div>
                        <div class="col descripcion">
                            Nos encontramos en: Zona Agua de la vida, Calle Yanacocha entre Sucre e Indaburo, Galería Siglo XXI N·719, Oficina 5
                        </div>
                    </div>
                    <div class="col">
                        <div class="col titulo">
                            Horario de Atencion
                        </div>
                        <div class="col descripcion">
                            De Lunes a Viernes 08:00 a 12:00 y 14:00 a 18:00 (Horarios de Oficina)
                        </div>
                    </div>
                    <div class="col">
                        <div class="col titulo">
                            Contactos
                        </div>
                        <div class="col descripcion">
                            <span>
                                Contacto 1: <a href="https://wa.me/67115199"> +(591) 67115199 <i class="fa-brands fa-whatsapp"></i></a> 
                            </span>
                            <span>
                                Contacto 2: <a href="https://wa.me/78844780"> +(591) 78844780 <i class="fa-brands fa-whatsapp"></i></a>
                            </span>
                            <span>
                                Correo Electronico: <a href="mailto:witchestravel.bo@gmail.com">witchestravel.bo@gmail.com <i class="fa-regular fa-envelope" style="color: red"></i></a>
                            </span>
                        </div>
                    </div>  
                </div>
                <div class="col-md-4" id="formulario-contacto">
                    <div class="col titulo">
                        Formulario de Contacto
                    </div>
                    <div class="col">
                        <form action="{{ route('formularioContacto') }}" method="post" class="text-start">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                                <input type="nombre" name="nombre_contacto" class="form-control" id="exampleFormControlInput1" value="{{ old("nombre_contacto","")}}" placeholder="Ej. Juan Peres">
                                @error('nombre_contacto')
                                    <span class="mensaje-error-inputs">{{ $message }}</span>
                                @enderror       
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Numero de Contacto:</label>
                                <input type="numero" name="numero_contacto" class="form-control" id="exampleFormControlInput2" value="{{ old("numero_contacto","")}}" placeholder="Ej. 77258452">
                                @error('numero_contacto')
                                    <span class="mensaje-error-inputs">{{ $message }}</span>
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                                <textarea class="form-control" name="mensaje_contacto" id="exampleFormControlTextarea1" rows="3" placeholder="Introduzca un texto">{{ old("mensaje_contacto") }}</textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col titulo">
                        Redes Sociales
                    </div>
                    <div class="col text-start" id="redes-sociales">
                        <div class="col">
                            <a href="https://www.facebook.com/462834473580527" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-facebook"></i> Facebook
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.tiktok.com/@witches.travel?_t=8qkJA59waov&_r=1" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-tiktok"></i> Tik Tok
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/witchestravel" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-instagram"></i> Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row dos">
                <div class="col text-center gloria-hallelujah-regular">
                    <span>
                        <i class="fa-regular fa-registered"></i> Todos los Derechos Reservados Witches Travel 2024
                    </span>
                    <span>
                        La Paz - Bolivia
                    </span>
                    <span>
                        <img class="mx-auto" src="{{ asset('/img/banderaBolivia.png') }}" alt="Bandera Bolivia">
                    </span>
                </div>
            </div>
        </div>
    </footer>
@endsection
