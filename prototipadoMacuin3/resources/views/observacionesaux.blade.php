@extends('plantauxiliar')
@section('contenido')
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- JavaScript -->
        <script>
            notie.setOptions({
                alertTime: 2
            })

            function crearTicket(event) {
                // Cancelar la acción predeterminada del clic
                event.preventDefault();
                newTicket();

                function newTicket() {
                    notie.confirm({
                        text: '¿Estas seguro que quieres hacer un ticket?<br>',
                        cancelCallback: function() {
                            notie.alert({
                                type: 3,
                                text: 'Ah, porque no? :(',
                                time: 2
                            })
                        },
                        submitCallback: function() {
                            notie.alert({
                                type: 1,
                                text: 'Buena eleción! :D',
                                time: 2
                            })
                            window.location.href = event.target.href;
                        }
                    })
                }
            }
        </script>

        <style>
            @import "table.css";
        </style>

    </head>
    <h3>Observaciones</h3>

    <body>
     @foreach($consultaConsultas as $consulta)
        <div class="card m-5
            <h5 class="card-header text-blue"><i class="bi bi-calendar3 text-red"></i>Id: {{ $consulta->id}}</h5>
            <div class="card-body"><h5 class="card-title">Ticket_id: {{ $consulta->Ticket_id }}</h5>
                <p class="card-text fw-light">Seguimiento: {{ $consulta->Seguimiento }}</p>
                <p class="card-text fw-light">Cliente_id: {{ $consulta->Cliente_id }}</p>
                <p class="card-text fw-light">Comentario: {{ $consulta->Comentario }}</p>
            </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/ticketsaux" class="btn btn-outline-warning">Regresar <i class="bi bi-pencil"></i></a>
            </div>
        </div>
    </div>
    @endforeach
    </body>

    </html>
@stop
