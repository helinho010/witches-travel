@extends('witchesTravelBase')

@section('header')
    <header class="header">
        <!-- Imagen de fondo 1 -->
        <div class="imagen imagen1"></div>
        <!-- Imagen de fondo 2 -->
        <div class="imagen imagen2"></div>
        <!-- Imagen de fondo 3 -->
        <div class="imagen imagen3"></div>
        <!-- Imagen de fondo 4 -->
        <div class="imagen imagen4"></div>
        
        <!-- Menú en la esquina superior izquierda -->
        <nav class="menu roboto-condensed-menu">
            <a href="#home">INICIO</a>
            <a href="#productos">PRODUCTOS</a>
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
            <span class="punto"></span>
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

<!-- Productos -->
<div class="container" id="productos">
    <div class="row text-center gloria-hallelujah-regular titulo-main">
        <div class="col-md-12">
            Productos y Servicios
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Categorías -->
            <div class="col-md-4 category-container">
                <div class="accordion accordion-flush" id="categoryAccordion">
                    <!-- Dairy, Bread & Eggs -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#category1" aria-expanded="true" aria-controls="category1">
                                🥾 Trekkng
                            </button>
                        </h2>
                        <div id="category1" class="accordion-collapse collapse show" data-bs-parent="#categoryAccordion">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item action-item" 
                                        data-content="
                                        <x-categoria.descripcion-sub-categoria 
                                            nombre-producto='Explora el Camino Prehispánico: Una Caminata a Través de la Historia'
                                            titulo-producto='Prueba'
                                            imagen-producto='mono.webp'
                                            descripcion-producto='Disfruta de una increíble caminata por el Camino Prehispánico, donde podrás conectar con la naturaleza, descubrir paisajes espectaculares y explorar senderos llenos de historia y cultura ancestral. ¡Una aventura única para los amantes del trekking y la historia!'
                                            precio-producto='Bs. 210 o Us. 70'
                                            comentarios-positivos-producto='75'
                                        />">
                                        Camino Prehispanico
                                    </li>
                                    <li class="list-group-item action-item" 
                                        data-content="
                                        <x-categoria.descripcion-sub-categoria 
                                            nombre-producto='Caminata Sendero del Choro'
                                            titulo-producto='Choro'
                                            imagen-producto='choro.jpeg'
                                            descripcion-producto='El Camino del Choro en Bolivia es una impresionante ruta de trekking que conecta la cordillera de los Andes con la selva yungueña. A lo largo de sus aproximadamente 60 km, los viajeros descienden desde los 4,900 metros de altura en el paso La Cumbre hasta los 1,300 metros en los valles subtropicales, atravesando paisajes espectaculares, antiguos caminos incas y una biodiversidad increíble. Ideal para aventureros que buscan una experiencia única entre historia, naturaleza y cultura.'
                                            precio-producto='Bs. 700 o Us. 100'
                                            comentarios-positivos-producto='203'
                                        />">
                                        El Choro (Camino del inca)
                                    </li>
                                    <li class="list-group-item action-item" data-content="Tiwanaku">Tiwanaku</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Snacks & Munchies -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category2" aria-expanded="false" aria-controls="category2">
                                🧗🏻‍♂️ Ascensos y Descensos
                            </button>
                        </h2>
                        <div id="category2" class="accordion-collapse collapse" data-bs-parent="#categoryAccordion">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item action-item" data-content="Chips varieties">Illimani</li>
                                    <li class="list-group-item action-item" data-content="Cookie types">Sajama</li>
                                    <li class="list-group-item action-item" data-content="Huayna Potosi">Huayna Potosi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Fruits & Vegetables -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category3" aria-expanded="false" aria-controls="category3">
                                🚣‍♂️ Adrenalina 
                            </button>
                        </h2>
                        <div id="category3" class="accordion-collapse collapse" data-bs-parent="#categoryAccordion">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item action-item" data-content="Rafting">Rafting</li>
                                    <li class="list-group-item action-item" data-content="trekking">trekking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Contenido al lado derecho -->
            <div class="col-md-8">
                <div class="content-box" id="content-display">
                    <h4>Select a category</h4>
                    <p>Click on a category to see details here.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Fin productos-->

<!-- Inicio Personal de la Empresa-->
<div class="container-fluid mt-5" id="informacion-personal">
    <div class="text-center gloria-hallelujah-regular titulo-main">Personal Capacitado</div>
    <br>
    <div class="row contenedor-principal-info-personal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                    <img style="height: 300px" src="{{asset('img/personal/1.jpeg')}}" alt="">
                </div>
                <div class="col-5 descripcion-personal">
                    <div class="info">
                        <h1>Elver Garalga</h1>
                        <h2>Guía Turística</h2>
                        <p>
                            Soy una guía turística apasionada con más de 10 años de experiencia 
                            mostrando las maravillas de nuestra ciudad. Experta en tours culturales, 
                            gastronómicos y de aventura.
                        </p>
                        <div class="details">
                            <p><strong>Idiomas:</strong> Español, Inglés, Francés, Portugues</p>
                            <p><strong>Contacto:</strong> +591 77777777</p>
                            <p><strong>Email:</strong> egalarga@witches-travel.com</p>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="row">
                <div class="col-5 descripcion-personal">
                    <div class="info">
                        <h1>Rosa Melano</h1>
                        <h2>Guía Turística</h2>
                        <p>
                            Soy una guía turística apasionada con más de 10 años de experiencia 
                            mostrando las maravillas de nuestra ciudad. Experta en tours culturales, 
                            gastronómicos y de aventura.
                        </p>
                        <div class="details">
                            <p><strong>Idiomas:</strong> Español, Inglés</p>
                            <p><strong>Contacto:</strong> +591 787956452</p>
                            <p><strong>Email:</strong> rmelano@witches-travel.com</p>
                        </div>
                    </div>                    
                </div>
                <div class="col-7">
                    <img style="width: 100% ;height: 300px" src="{{asset('img/personal/2.webp')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <img style="height: 300px" src="{{asset('img/personal/3.webp')}}" alt="">
                </div>
                <div class="col-5 descripcion-personal">
                    <div class="info">
                        <h1>Yosi Lodoi</h1>
                        <h2>Guía Turística</h2>
                        <p>
                            Soy una guía turística apasionada con más de 10 años de experiencia 
                            mostrando las maravillas de nuestra ciudad. Experta en tours culturales, 
                            gastronómicos y de aventura.
                        </p>
                        <div class="details">
                            <p><strong>Idiomas:</strong> Español, Arabe, Arameo, Latin</p>
                            <p><strong>Contacto:</strong> +591 69892636</p>
                            <p><strong>Email:</strong> yolodi@witches-travel.com</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Personal de la Empresa-->

<!--Inicio Colash imagenes-->
<div class="container" id="colash">
    <div class="collage">
        <img src="{{asset('img/baner/Baner1.jpg')}}" class="img img1" alt="">
        <img src="{{asset('img/baner/Baner2.jpg')}}" class="img img2" alt="">
        <img src="{{asset('img/baner/Baner3.jpg')}}" class="img img3" alt="">
        <img src="{{asset('img/baner/Baner4.jpg')}}" class="img img4" alt="">
        <img src="{{asset('img/baner/Baner5.jpg')}}" class="img img5" alt="">
        <img src="{{asset('img/baner/Baner6.jpg')}}" class="img img6" alt="">
        <img src="{{asset('img/baner/Baner8.jpg')}}" class="img img7" alt="">
        <div class="text-overlay">
            <h2>Recuerdos del</h2>
            <h1>VERANO</h1>
            <h3>2024</h3>
        </div>
    </div>
</div>
<!--Fin Colash imagenes-->

<div class="container mt-5">
    <div class="row">
        <!-- One Column & Sidebar -->
        <div class="col-md-6 col-lg-4">
            <h2>Escapada Romántica</h2>
            <p>Destinos: Playa, Montaña, Ciudades románticas.</p>
            <p>Incluye: Hospedaje, transporte y actividades exclusivas para parejas.</p>
        </div>
        <div class="col-md-6 col-lg-4">
            <h2>Aventura en la Naturaleza</h2>
            <p>Destinos: Parques nacionales, Ecoturismo.</p>
            <p>Incluye: Caminatas guiadas, campamentos y equipo.</p>
        </div>
        <div class="col-md-6 col-lg-4">
            <h2>Viajes Familiares</h2>
            <p>Destinos: Resorts familiares, parques temáticos.</p>
            <p>Incluye: Actividades para todas las edades y descuentos grupales.</p>
        </div>
    </div>    
</div>

<div class="container mt-5">
    <div class="text-center gloria-hallelujah-regular" id="titulo-carousel">Comentarios de las Personas</div>
    <div class="carousel-container">
        <button class="btn-nav left">&larr;</button>
        <button class="btn-nav right">&rarr;</button>
      
        <div class="carousel">
          <div class="card">    
            <h5>Card 1</h5>
            <p>Content for card 1.</p>
          </div>
          <div class="card">
            <h5>Card 2</h5>
            <p>Content for card 2.</p>
          </div>
          <div class="card">
            <h5>Card 3</h5>
            <p>Content for card 3.</p>
          </div>
          <div class="card">
            <h5>Card 4</h5>
            <p>Content for card 4.</p>
          </div>
        </div>
      </div>
</div>

<!-- Estadistica -->
<div class="container text-center py-5">
    <div class="row">
        <div class="col-md-4">
            <h2 class="custom-number-color counter" data-target="70">0</h2>
            <h5 class="custom-text-color">Coded Elements</h5>
            <p class="custom-subtext">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
        </div>
        <div class="col-md-4 position-relative">
            <div class="divider position-absolute top-0 start-0"></div>
            <h2 class="custom-number-color counter" data-target="15">0</h2>
            <h5 class="custom-text-color">Design Blocks</h5>
            <p class="custom-subtext">Mix the sections, change the colors and unleash your creativity</p>
        </div>
        <div class="col-md-4 position-relative">
            <div class="divider position-absolute top-0 start-0"></div>
            <h2 class="custom-number-color counter" data-target="4">0</h2>
            <h5 class="custom-text-color">Pages</h5>
            <p class="custom-subtext">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
        </div>
    </div>
</div>
<!-- Fin Estadistica-->

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
