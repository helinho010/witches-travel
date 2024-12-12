<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnvioCorreoContacto extends Controller
{
    public function envioCorreoFormularioContacto(Request $request)
    {
        $validate = $request->validate([
            'nombre_contacto' => 'required|string',
            'numero_contacto' => 'required|string',
            'mensaje_contacto' => 'string',
        ]);

        $data = [
            'nombre' => $request->nombre_contacto,
            'contacto' => $request->numero_contacto,
            'mensaje' => $request->mensaje_contacto,
            'url' => route('home'),
        ];
        
        Mail::to('g.apaza007@gmail.com')->send(new OrderShipped($data));

        // return redirect(route('home') . '/#Contacto');
        return redirect()->route('home'.'/#Contacto',["nombre"=>"Helio"]);
    }
}
