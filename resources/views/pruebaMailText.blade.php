<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 1px solid #eeeeee;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777777;
            margin-top: 20px;
        }
        .contenido-mensaje{
            font-size: 15px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            background-color: #007BFF;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>¡Hola, este es un mensaje instantaneo del Sitio Web!</h2>
            <h2>Witches Travel</h2>
        </div>
        <p>Se envio un mensaje desde sitio Web Witches Travel, con la siguiente informacion:</p>
        <p class="contenido-mensaje">
            Cliente: {{ $data['nombre'] }} <br>
            Celular o Correo Electronico: {{ $data['contacto'] }} <br>
            Mensaje: {{ $data['mensaje'] }} <br>
        </p>
        <p>Gracias por utilizar nuestros servicios. Este es un correo estilizado de prueba.</p>
        <a href="{{ $data['url'] }}" class="btn">Ver más</a>
        <div class="footer">
            <p>© 2024 Whtiches Travel. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>

</div>
