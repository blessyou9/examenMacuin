@extends('plantauxiliar')
@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo', 'Tu recuerdo llego al controlador', 'success'</script>"!!}
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
    </div>
@endif
<html>
    <h3>Control de Tickets</h3>
    <br></br>

<head>
    <title>
        FormularioUpdate
    </title>
    <style>
        h3 {
			font-size: 32px;
			font-weight: bold;
			text-align: center;
			margin: 20px 0;
			color: #000000;
		}

		body {
			font-family: Arial, sans-serif;
			background-color: #F2F2F2;
			margin: 0;
			padding: 0;
		}

		form {
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			max-width: 500px;
			margin: auto;
		}

		label {
			display: block;
			margin-bottom: 5px;
			font-size: 16px;
			font-weight: bold;
		}

		input[type="int"] {
			display: block;
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid #CCC;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
		}

        input[type="text"] {
			display: block;
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid #CCC;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
		}


        #boton {
            background-color: blue;
            color: white;
            border: 2px solid black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            box-shadow: 2px 2px 5px gray;
        }

		button[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
            font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
		}

		button[type="submit"]:hover {
			background-color: #3E8E41;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
		}
	</style>
</head>
<body>
    <form action="{{ route('insertarobservacionesaux', $consultaid->Codigo) }}" method="POST">
        @csrf
            {!! method_field('PUT') !!}
        <label>Atención al Ticket: </label>
        <input type="text" name="txtTitulo" value="{{ $consultaid->Codigo}}"></input>
        <label>Detalles de seguimiento: </label>
        <input type="text" name="txtTitulo1" value="{{ old('txtTitulo1')}}"></input>
        <label>Comunicacion con los clientes: </label>
        <input type="text" name="txtTitulo2" value="{{ old('txtTitulo2')}}"></input>
        <label>Enviar comentarios: </label>
        <input type="text" name="txtTitulo3" value="{{ old('txtTitulo3')}}"></input>
        <button type="submit" name="btn_send" id="btn_send">Enviar</button>

    </form>
</body>
</html>
@stop
