<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Electrónico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            line-height: 1.6;
            color: #333333;
        }
        .content p {
            margin: 10px 0;
        }
        .content p strong {
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://scontent.fgdl3-1.fna.fbcdn.net/v/t39.30808-6/441247843_422889720603990_135420800327620049_n.jpg?stp=dst-jpg_p526x296&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=I3znn4TwXOkQ7kNvgGNeK1d&_nc_ht=scontent.fgdl3-1.fna&oh=00_AYByipUw8UKfEDXtoz1s5yT_XBztCj0zI2cMAb29Kf9Mgw&oe=666945F7" alt="Logo de la Empresa" >
            <h1>Mensaje de interesado</h1>
        </div>
        <div class="content">
            <p>Datos de la persona interesada:</p>
            <p><strong>Nombre:</strong> {{$data["nombre"]}}</p>
            <p><strong>Correo:</strong> {{$data["email"]}}</p>
            <p><strong>Teléfono:</strong> {{$data["telefono"]}}</p>
            <p><strong>Asunto:</strong> {{$data["asunto"]}}</p>
            <p><strong>Mensaje:</strong> {{$data["mensaje"]}}</p>
            {{-- <p><strong>Ofertas:</strong> {{$data["ofertas"]}}</p> --}}
        </div>
    </div>
</body>
</html>
