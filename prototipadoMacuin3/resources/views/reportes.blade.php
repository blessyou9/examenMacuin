@extends('plant')
@section('contenido')
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            @import "table.css";
        </style>
    </head>

    <body>
        <center>
            <a href="/pdf" class="btn btn-outline-warning">Descargar PDF de departamentos<i class="bi bi-pencil"></i></a>
            <a href="/pdf2" class="btn btn-outline-warning">Descargar PDF de tickets<i class="bi bi-pencil"></i></a>
            <a href="/pdf3" class="btn btn-outline-warning">Descargar PDF de todo<i class="bi bi-pencil"></i></a>
        </center>
        <br>

        <h2><strong>Reporte de departamentos</strong></h2>
        @foreach ($consultaConsultas as $consulta)
            <div class="card m-5">
                <h5 class="card-header text-blue"><i class="bi bi-calendar3 text-red"></i>Id:
                    {{ $consulta->id }}
                </h5>
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{ $consulta->Nombre }}</h5>
                    <p class="card-text fw-light">Ubicacion: {{ $consulta->Ubicacion }}</p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/consultaTicket" class="btn btn-outline-warning">Regresar <i class="bi bi-pencil"></i></a>
                    </div>
                </div>
            </div>
        @endforeach

        <h2><strong>Reporte de tickets</strong></h2>
        @foreach ($consulta5 as $consulta2)
            <div class="card m-5">
                @if (isset($consulta2->Codigo))
                    <h5 class="card-header text-blue"><i class="bi bi-calendar3 text-red"></i>Codigo:
                        {{ $consulta2->Codigo }}
                    </h5>
                @endif
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{ $consulta2->Nombre }}</h5>
                    <p class="card-text fw-light">Rol: {{ $consulta2->Rol }}</p>
                    <p class="card-text fw-light">Creación: {{ $consulta2->Creacion }}</p>
                    <p class="card-text fw-light">Departamento: {{ $consulta2->Departamento }}</p>
                    <p class="card-text fw-light">Status: {{ $consulta2->Status }}</p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/consultaTicket" class="btn btn-outline-warning">Regresar <i class="bi bi-pencil"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </body>

    </html>
@stop
