<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>

</head>

<body>
    <h2>Reporte de tickets</h2>
    @foreach ($consulta5 as $consulta2)
        <div class="card m-5">
            <h5 class="card-header text-blue"><i class="bi bi-calendar3 text-red"></i>Codigo:
                {{ $consulta2->Codigo }}</h5>
            <div class="card-body">
                <p class="card-text fw-light">Nombre: {{ $consulta2->Nombre }}</p>
                <p class="card-text fw-light">Rol: {{ $consulta2->Rol }}</p>
                <p class="card-text fw-light">Creación: {{ $consulta2->Creacion }}</p>
                <p class="card-text fw-light">Departamento: {{ $consulta2->Departamento }}</p>
                <p class="card-text fw-light">Status: {{ $consulta2->Status }}</p>
            </div>
        </div>
    @endforeach
</body>

</html>
