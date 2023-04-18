<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>

</head>

<body>
    <h2>Reportes de departamentos</h2>
    @foreach ($consultaConsultas as $consulta)
        <div class="card m-5">
            <h5 class="card-header text-blue"><i class="bi bi-calendar3 text-red"></i>Id:
                {{ $consulta->id }}</h5>
            <div class="card-body">
                <p class="card-text">Nombre: {{ $consulta->Nombre }}</p>
                <p class="card-text fw-light">Ubicacion: {{ $consulta->Ubicacion }}</p>
            </div>
        </div>
    @endforeach
</body>

</html>
