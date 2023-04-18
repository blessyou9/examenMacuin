@extends('plant')
@section('contenido')
<h1 class="mt-4 display-1 text-center text-black"> <i class="bi bi-card-checklist">Consultas</i></h1>
<div class="container col-md-6">
    @foreach($consultaConsultas as $consulta)
        <div class="card m-5">
            <h5 class="card-header text-blue"><i class="bi bi-calendar3 text-red"></i>Id: {{ $consulta->id}}</h5>
            <div class="card-body"><h5 class="card-title">Ticket_id: {{ $consulta->Ticket_id }}</h5>
                <p class="card-text fw-light">Seguimiento: {{ $consulta->Seguimiento }}</p>
                <p class="card-text fw-light">Cliente_id: {{ $consulta->Cliente_id }}</p>
                <p class="card-text fw-light">Comentario: {{ $consulta->Comentario }}</p>
            </div>
        </div>
            
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/consultaTicket" class="btn btn-outline-warning">Regresar <i class="bi bi-pencil"></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop
