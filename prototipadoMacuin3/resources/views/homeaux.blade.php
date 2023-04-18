@extends('plantauxiliar')
@section('contenido')
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<h1 class="text-3xl font-bold underline">
    Bienvenido usuario Auxiliar
    espero que te guste Macuin Dashboard!
  </h1>
  <br>
  <div class="card bg-primary">
    <div class="card-body">
      <h3 class="card-title">Bienvenido Usuario</h3>
      <p class="card-text">
        ¡Bienvenido al sistema de administración de tickets! Estamos encantados de tenerte a bordo y ayudarte en todo lo que necesites. Este sistema te permitirá crear, gestionar y resolver tickets de manera efectiva y eficiente.
        <br><br>
        En este sistema, podrás crear tickets para informar cualquier problema o incidencia que puedas tener, y nuestro equipo de soporte estará a tu disposición para resolverlos lo antes posible. También podrás ver el estado de tus tickets y recibir notificaciones en tiempo real sobre su progreso y resolución.
        <br><br>
        Nuestro objetivo es proporcionarte una experiencia de soporte excepcional, brindándote una solución rápida y efectiva a tus problemas. Estamos comprometidos en ofrecerte un servicio de alta calidad y asegurarnos de que todos tus problemas sean atendidos de manera oportuna y eficiente.
        <br><br>
        Te invitamos a explorar nuestro sistema de administración de tickets y a contactar a nuestro equipo de soporte en caso de cualquier duda o necesidad de ayuda. ¡Gracias por confiar en nosotros y esperamos que tengas una experiencia excepcional con nuestro sistema de administración de tickets!
      </p>
    </div>
  </div>
  <br>
<body>
  <h2>Algunos de nuestros negocios asociados:</h2>
  <br>
  <br>
  <div class="row text-center">
    <div class="col-md-3 text-center">
      <img src="https://via.placeholder.com/150x100.png?text=Ticket+Master" alt="Ticket Master">
    </div>
    <div class="col-md-3 text-center">
      <img src="https://via.placeholder.com/150x100.png?text=StubHub" alt="StubHub">
    </div>
    <div class="col-md-3 text-center">
      <img src="https://via.placeholder.com/150x100.png?text=LiveNation" alt="LiveNation">
    </div>
    <div class="col-md-3 text-center">
      <img src="https://via.placeholder.com/150x100.png?text=Eventbrite" alt="Eventbrite">
    </div>
  </div>
</body>

</html>
@stop
