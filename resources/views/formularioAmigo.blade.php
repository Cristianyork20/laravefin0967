<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="{{route('formularioAmigo.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <h2>Números Amigos</h2>
        <label>
        Ingrese el primer número:
        <br>
        <input type="number" name="numAmigo1">
        </label>
        <br>
        <label>
        Ingrese el segundo número:
        <br>
        <input type="number" name="numAmigo2">
        </label>


        <button type="submit">Enviar Formulario:</button>
    </form>

</body>
</html>
