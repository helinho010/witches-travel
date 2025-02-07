<?php

namespace App\View\Components\Comentario;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $imagenComentarioCard,
        public string $nombrePersonaComentarioCard ,
        public string $textoComentarioCard,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comentario.card');
    }
}
