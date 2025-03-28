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
            <img class="logo img-fluid" src="{{ asset('/img/witchesTravelLogoSinFondo.png') }}" alt="Logo de la empresa">
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
{{-- <div class="container my-5" id="productos">
    <div class="row text-center gloria-hallelujah-regular titulo-main">
        <div class="col-md-12 h3">
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
</div> --}}
<!-- Fin productos-->

<!-- Inicio Personal de la Empresa-->
{{-- <div class="container-fluid mt-5 my-5" id="informacion-personal">
    <div class="text-center gloria-hallelujah-regular titulo-main h3">Personal Capacitado</div>
    <br>
    <div class="row contenedor-principal-info-personal">
        <div class="container-fluid">
            <div class="row d-flex flex-column d-sm-flex flex-sm-column d-md-flex flex-md-row">
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <img class="img-fluid" style="height: 300px" src="{{asset('img/personal/1.jpeg')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 descripcion-personal">
                    <div class="info">
                        <h1>Elver Galarga</h1>
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
            <div class="row d-flex flex-column d-sm-flex flex-sm-column d-md-flex flex-md-row">
                <div class="col-xs-12 col-sm-12 col-md-5 order-2 descripcion-personal">
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
                <div class="col-xs-12 col-sm-12 col-md-7 order-1">
                    <img class="img-fluid" style="width: 100% ;height: 300px" src="{{asset('img/personal/2.webp')}}" alt="">
                </div>
            </div>
            <div class="row d-flex flex-column d-sm-flex flex-sm-column d-md-flex flex-md-row">
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <img class="img-fluid" style="height: 300px" src="{{asset('img/personal/3.webp')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 descripcion-personal">
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
</div> --}}
<!-- Fin Personal de la Empresa-->

<!--Inicio Colash imagenes-->
<div class="container my-2" id="colash">
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

<div class="container mt-5 my-2">
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
    <div class="text-center gloria-hallelujah-regular h3" id="titulo-carousel">Comentarios de las Personas</div>
    <div class="carousel-container">
        <button class="btn-nav left">&larr;</button>
        <button class="btn-nav right">&rarr;</button>

        <div class="carousel">
          <div class="card">
            <div class="card-content">
                <div class="profile-img">
                    <img src="{{ asset('/img/comentarios/1.jpg') }}" alt="Perfil">
                </div>
                <h5 class="profile-name">Ryna Camacho</h5>
                <p>"Explorar nuevos senderos es descubrirse a uno mismo. Cada paso en el trekking es una historia, cada montaña conquistada es un logro. ¡Una experiencia que te llena de vida!"</p>
            </div>
          </div>
          <x-comentario.card class="card"
                imagen-comentario-card="1.png"
                nombre-personaComentario-card="Daniela Prado"
                texto-comentario-card="Nada se compara con la sensación de libertad que te da el trekking. Respirar aire puro, desconectarse del mundo y conectar con la naturaleza es simplemente mágico."
          />
          <x-comentario.card class="card"
                imagen-comentario-card="2.jpeg"
                nombre-personaComentario-card="Alberto Quarite"
                texto-comentario-card="Cada ruta es un nuevo desafío, pero la recompensa siempre vale la pena. Paisajes asombrosos, momentos únicos y recuerdos imborrables. ¡El trekking es pura aventura!"
          />
          <x-comentario.card class="card"
                imagen-comentario-card="3.jpeg"
                nombre-personaComentario-card="Arnaldo Arispe"
                texto-comentario-card="Caminar entre montañas y bosques es la mejor terapia. El trekking no solo fortalece el cuerpo, sino también el espíritu. ¡Una pasión que te transforma!"
            />
        </div>
    </div>
</div>

<!-- Estadistica -->
<div class="container text-center py-5">
    <div class="row">
        <div class="col-md-4">
            <h2 class="custom-number-color"><span>+</span><span class="counter" data-target="70" >0</span></h2>
            <h5 class="custom-text-color">Paquetes turísticos</h5>
            <p class="custom-subtext">Opciones personalizadas para todos los gustos y presupuestos.</p>
        </div>
        <div class="col-md-4 position-relative">
            <div class="divider position-absolute top-0 start-0"></div>
            <h2 class="custom-number-color"><span>+</span><span class="counter" data-target="1000">0</span></h2>
            <h5 class="custom-text-color">Clientes satisfechos</h5>
            <p class="custom-subtext">Experiencias inolvidables con opiniones positivas.</p>
        </div>
        <div class="col-md-4 position-relative">
            <div class="divider position-absolute top-0 start-0"></div>
            <h2 class="custom-number-color"><span>+</span><span class="counter" data-target="30">0</span></h2>
            <h5 class="custom-text-color">Tours guiados exclusivos</h5>
            <p class="custom-subtext">Rutas especiales con guías expertos.</p>
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
                <div class="col-sm-12 col-md-4 text-start">
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
                <div class="col-xs-5 col-sm-5 col-md-4" id="formulario-contacto">
                    <div class="titulo">
                        Formulario de Contacto
                    </div>
                    <div class="">
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
                <div class="col-sm-12 col-md-4">
                    <div class="row">
                        <div class="titulo">
                            Redes Sociales
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-inline-flex flex-row justify-content-center d-sm-inline-flex flex-sm-row justify-content-sm-center d-md-fex flex-md-column" id="redes-sociales">
                            <div>
                                <a href="https://www.facebook.com/462834473580527" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-facebook"></i> Facebook
                                </a>
                            </div>
                            <div>
                                <a href="https://www.tiktok.com/@witches.travel?_t=8qkJA59waov&_r=1" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-tiktok"></i> Tik Tok
                                </a>
                            </div>
                            <div>
                                <a href="https://www.instagram.com/witchestravel" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row dos">
                <div class="col text-center gloria-hallelujah-regular">
                    <span class="gold-text">
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
