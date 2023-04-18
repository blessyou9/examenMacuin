@extends('plant')
@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo', 'Tu recuerdo llego al controlador', 'success'</script>"!!}
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Ingrese su usuario</h1>
<br>
<div class="container mt-5 cool-md-6">
    <div>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
    @endif

    <div>
        <form method="post" action="{{ route('registrarusuario') }}">
            @csrf
            <div>
                <label class="form-label" name="labelTitulo">Nombre: </label>
                <input type="text" class="form-control" name="txtTitulo" value="{{ old('txtTitulo')}}"></input>
            </div>
            <div>
                <label class="form-label" name="labelTitulo">Rol: </label>
                <input type="text" class="form-control" name="txtTitulo1" value="{{ old('txtTitulo2')}}"></input>
            </div>

    </div>

    <div>
        <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" type="submit" name="btnGuardar">Guardar</button>
    </div>
    <div>
        <br>
        <br>
        <a class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" href="/usuarios">Regresar</a>
    </div>
        </form>

    </div>
</div>
<br>

@stop
