<?php

namespace App\View\Components\Categoria;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DescripcionSubCategoria extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct(
        public string $nombreProducto,
        public string $imagenProducto,
        public string $tituloProducto,
        public string $descripcionProducto,
        public string $precioProducto,
        public string $comentariosPositivosProducto,
    ){
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categoria.descripcion-sub-categoria');
    }
}
