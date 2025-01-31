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
