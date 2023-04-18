@extends('plant')
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
                alertTime: 20
            })

            function validarDepartment(event) {
                // Cancelar la acción predeterminada del clic
                event.preventDefault();

                // Mostrar mensaje de confirmación al usuario
                notie.confirm({
                    text: '¿Estás seguro que quieres hacer un nuevo departamento?<br>',
                    cancelCallback: function() {
                        notie.alert({
                            type: 3,
                            text: 'Creación de nuevo departamento cancelado :('
                        })
                    },
                    submitCallback: function() {
                        // Redirigir al usuario a la página vinculada
                        notie.alert({
                            type: 1,
                            text: 'Buena eleción! :D',
                            time: 20
                        })
                        window.location.href = event.target.href;
                    }
                });
            }
        </script>

        <style>
            @import "table.css";
        </style>
    </head>
    <h3>Administración de Departamentos</h3>

    <body>
        <!-- Bottom of body -->
        <script src="https://unpkg.com/notie"></script>
        <!-- component -->
        <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold">Reporte</h2>
                    <span class="text-xs">All User List</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex bg-gray-50 items-center p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                        <input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id=""
                            placeholder="search...">
                    </div>
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <a href="/insertardepa"
                            class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                            onclick="validarDepartment(event)">New department</a>
                    </div>
                </div>
            </div>
            </head>

            <body>
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Ubicacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consultaConsultas as $consulta)
                            <tr>
                                <td>
                                    <p class="card-header text-blue"><i
                                            class="bi bi-calendar3 text-red"></i>{{ $consulta->id }}</p>
                                </td>
								<td class="px-5 py-5 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="card-title" style="margin-top: -5px">{{ $consulta->Nombre }}<br></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>{{ $consulta->Ubicacion }}</p>
                                </td>
                                <td>
                                    <a href="{{ route('editardepa', $consulta->id) }}" 
										onclick="event.preventDefault(); if(confirm('¿Estás seguro que quieres editar este departamento?')) { window.location.href = '{{ route('editardepa', $consulta->id) }}'; }"
										class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>


									<a href="{{ route('eliminardepa', $consulta->id) }}"
										onclick="event.preventDefault(); if(confirm('¿Estás seguro que quieres eliminar este usuario?')) {document.getElementById('delete-form-{{ $consulta->id }}').submit();}"
										class="delete" title="Delete" data-toggle="tooltip"><i
											class="material-icons">&#xE872;</i></a>
		
									<form id="delete-form-{{ $consulta->id }}"
										action="{{ route('eliminardepa', $consulta->id) }}" method="POST"
										style="display: none;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									</form>	
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div
                    class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                    <span class="text-xs xs:text-sm text-gray-900">
                        Showing 1 to 4 of 50 Entries
                    </span>
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button
                            class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                            Prev
                        </button>
                        &nbsp; &nbsp;
                        <button
                            class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                            Next
                        </button>
                    </div>
                </div>
        </div>
    </body>
    </html>
@stop
