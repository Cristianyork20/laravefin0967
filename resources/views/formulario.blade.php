<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulario</h1>

    <form action="{{route('formulario.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <h2>Número Primo</h2>
        <label>
        Ingrese el número para saber si es o no primo:
        <br>
        <input type="number" name="numPrimo">
        </label>

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

            <h2>Cuadrática</h2>
            <label>
                Ingrese el valor de a:
                <br>
                <input type="number" name="a">
                </label>
                <br>
                <label>
                Ingrese el valor de b:
                <br>
                <input type="number" name="b">
                </label>
                <br>
                <label>
                Ingrese el valor de c:
                <br>
                <input type="number" name="c">
                </label>

        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
    </form>

</body>
</html>