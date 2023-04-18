@extends('plant')
@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo', 'Tu recuerdo llego al controlador', 'success'</script>"!!}
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Editar consultas</h1>
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
        <div class="text-center">
            Correcciones a las consultas <i class="bi bi-wechat"></i>
        </div>
    <div>
        <form method="post" action="{{ route('actualizar', $consultaid->Codigo) }}">
            @csrf
            {!! method_field('PUT') !!}
            <div class="mb-3">
                <label class="form-label" name="labelTitulo">Nombre: </label>
                <input type="text" class="form-control" name="txtTitulo" value="{{ $consultaid->Nombre }}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtTitulo')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label" name="labelTitulo">Rol: </label>
                <input type="text" class="form-control" name="txtTitulo1" value="{{ $consultaid->Rol }}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtTitulo1')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label" name="labelTitulo">Departamento: </label>
                <input type="text" class="form-control" name="txtTitulo2" value="{{ $consultaid->Departamento }}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtTitulo2')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label" name="labelTitulo">Status: </label>
                <input type="text" class="form-control" name="txtTitulo3" value="{{ $consultaid->Status}}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtTitulo3')}}</p>
            </div>

    </div>

    <div>
        <button type="submit" name="btnActualizar" class="btn btn-dark">Actualizar</button>
    </div>
        </form>

    </div>
</div>
<br>

@stop
