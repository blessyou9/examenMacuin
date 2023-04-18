<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;
use App\Http\Controllers\controladorPaginas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [controladorPaginas::class, 'Flogin'])->name('Nlogin');

Route::get('/home', [controladorPaginas::class, 'Fhome'])->name('Nhome');

Route::get('/usuarios', [controladorPaginas::class, 'Fusuario'])->name('Nusuarios');
Route::get('/usuarios', [controladorBD::class, 'indexUsuario'])->name('Nusuarios');

Route::get('/departamentos', [controladorPaginas::class, 'Fdepartamentos'])->name('Ndepartamentos');
Route::get('/departamentos', [controladorBD::class, 'indexDepartamentos'])->name('Ndepartamentos');

Route::get('/tickets', [controladorPaginas::class, 'Ftickets'])->name('Ntickets');
Route::get('/tickets', [controladorBD::class, 'indexTickets'])->name('Ntickets');
Route::get('/ticketsaux', [controladorBD::class, 'indexTicketsaux'])->name('Nticketsaux');

Route::get('/reportes', [controladorPaginas::class, 'Freportes'])->name('Nreportes');
Route::get('/reportes', [controladorBD::class, 'indexReportes'])->name('Nreportes');
Route::get('/reportesaux', [controladorBD::class, 'indexReportesaux'])->name('Nreportesaux');

Route::get('/observaciones', [controladorPaginas::class, 'Fobservaciones'])->name('Nobservaciones');
Route::get('/observaciones', [controladorBD::class, 'indexObservaciones'])->name('Nobservaciones');
Route::get('/observacionesaux', [controladorBD::class, 'indexObservacionesaux'])->name('Nobservacionesaux');

Route::get('/perfilJefe', [controladorPaginas::class, 'FperfilJefe'])->name('NperfilJefe');
Route::get('/formJefe', [controladorPaginas::class, 'FformJefe'])->name('NformJefe');

Route::get('/perfilAuxiliar', [controladorPaginas::class, 'FperfilAuxiliar'])->name('NperfilAuxiliar');
Route::get('/perfilaux', function () { return view('perfilaux');})->name('perfilaux');
Route::get('/formAuxiliar', [controladorPaginas::class, 'FformAuxiliar'])->name('NformAuxiliar');

Route::get('/perfilCliente', [controladorPaginas::class, 'FperfilCliente'])->name('NperfilCliente');
Route::get('/formCliente', [controladorPaginas::class, 'FformCliente'])->name('NformCliente');
////////////////////////////////////////////////////////////////////////////////

Route::get('/insertarticket', [controladorPaginas::class, 'Finsertarticket'])->name('Ninsertarticket');

Route::get('/insertarticketaux', [controladorPaginas::class, 'Finsertarticketaux'])->name('Ninsertarticketaux');
Route::get('/insertarticketclient', [controladorPaginas::class, 'Finsertarticketclient'])->name('Ninsertarticketclient');

Route::get('/insertarusuario', [controladorPaginas::class, 'Finsertarusuario'])->name('Ninsertarusuario');
Route::get('/insertardepa', [controladorPaginas::class, 'Finsertardepa'])->name('Ninsertardepa');
Route::get('/consultascrud', [controladorPaginas::class, 'Fconsultascrud'])->name('Nconsultascrud');

Route::get('/borrar/{Codigo}', [controladorBD::class, 'destroy'])->name('borrar');
Route::post('/registrarusuario', [controladorBD::class, 'store2'])->name('registrarusuario');

Route::post('/registrar', [controladorBD::class, 'store'])->name('registrar');
Route::post('/registraraux', [controladorBD::class, 'storeaux'])->name('registraraux');
Route::post('/registrarclient', [controladorBD::class, 'storeclient'])->name('registrarclient');


//Eliminar Usuarios
Route::get('/eliminar', [controladorBD::class, 'indexUsuario'])->name('Eliminar');
Route::delete('/eliminar/{id}', [controladorBD::class, 'destroy2'])->name('Eliminar');

//Eliminar Departamentos
Route::get('/eliminardepa', [controladorBD::class, 'indexDepartamentos'])->name('eliminardepa');
Route::delete('/eliminardepa/{id}', [controladorBD::class, 'destroy3'])->name('eliminardepa');

//Editar Departamentos
Route::get('/actualizadepa/{id}',[controladorBD::class, 'edit3'])->name('editardepa');


//Eliminar Tickets
Route::get('/consultaTicket', [controladorBD::class, 'indexTickets'])->name('NconsultaTicket');
Route::delete('/consultaTicket/{id}',[controladorBD::class, 'destroy'])->name('NconsultaTicket');
Route::delete('/consultaTicketaux/{id}',[controladorBD::class, 'destroyaux'])->name('NconsultaTicketaux');

//Editar Tickets
Route::get('/editar/{Codigo}',[controladorBD::class, 'edit'])->name('editar');
Route::get('/editar/{id}',[controladorBD::class, 'edit'])->name('editarticket');
Route::get('/editaraux/{Codigo}',[controladorBD::class, 'editaux'])->name('editaraux');
Route::get('/editaraux/{id}',[controladorBD::class, 'editaux'])->name('editarticketaux');

//Actualizar Usuarios
Route::put('/usuario/{id}', [controladorBD::class, 'update2'])->name('actualizarus');

//Actualizar Departamentos
Route::put('/depa/{id}', [controladorBD::class, 'update3'])->name('actualizardepa');

//Insertar Departamentos
Route::post('/registrardepa', [controladorBD::class, 'store3'])->name('registrardepa');

//Editar Usuarios
Route::get('/actualizarusuario/{id}',[controladorBD::class, 'edit2'])->name('editarusuario');

//Insertar Observaciones
Route::put('/observaciones/{id}', [controladorBD::class, 'update'])->name('insertarobservaciones');
Route::put('/observacionesaux/{id}', [controladorBD::class, 'updateaux'])->name('insertarobservacionesaux');

//Validar email de usuario
Route::get('/validacion',[controladorBD::class, 'validacion'])->name('validacion');

//Pagina web de auxiliar
Route::get('/homeauxiliar', function () {
    return view('homeaux');
})->name('homeaux');

//Pagina web de cliente
Route::get('/homecliente', function () {
    return view('homecliente');
})->name('homecliente');

//Pagina web de cliente del perfil cliente
Route::get('/perfilclient', function () {
    return view('perfilclient');
})->name('perfilclient');

//Tickets cliente
Route::get('/ticketscliente', [controladorBD::class, 'indexTicketscliente'])->name('Nticketscliente');

//Ruta para buscar los tickets por filtracciones
Route::get('/filtrar',[controladorBD::class, 'filtro'])->name('filtrar');
Route::get('/filtraraux',[controladorBD::class, 'filtroaux'])->name('filtraraux');

//Ruta para imprimir el pdf
Route::get('/pdf', [controladorBD::class, 'pdf'])->name('hacerpdf');
Route::get('/pdf2', [controladorBD::class, 'pdf2'])->name('hacerpdf2');
Route::get('/pdf3', [controladorBD::class, 'pdf3'])->name('hacerpdf3');

