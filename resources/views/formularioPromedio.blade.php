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

    <form action="{{route('formularioPromedio.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <h2>Promedio</h2>
        <label>
            Ingrese la primera nota:
            <br>
            <input type="number" name="numPromedio1">
            </label>
            <br>
            <label>
            Ingrese la segunda nota:
            <br>
            <input type="number" name="numPromedio2">
            </label>
            <br>
            <label>
            Ingrese la tercera nota:
            <br>
            <input type="number" name="numPromedio3">
            </label>


        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
