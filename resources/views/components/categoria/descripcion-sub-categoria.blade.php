<div>
    <div class='container-fluid'>
        <div class='row text-center'>
            <span class='badge mb-3'>DESCUENTO DEL 25%</span>
            <div class='col-md-6'>
                <img src='{{ asset("/img/$imagenProducto") }}' style='width: 500px;' alt='{{ $tituloProducto }}'>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-10'>
                <h2 class='card-title'> {{ $nombreProducto }} </h2>
                <p class='card-text'> {{ $descripcionProducto }} </p>
                <p class='price'> {{ $precioProducto }} </p>
                <p class='favorite'> + {{ $comentariosPositivosProducto }} lo marcaron como favorito</p>
                {{-- <p class='sponsored'>Patrocinado</p>
                <p class='seller'>stecon397009 (36) 94,6%</p>
                <button class='btn btn-primary'>Hacer oferta</button> --}}
            </div>
        </div>
    </div>    
</div>