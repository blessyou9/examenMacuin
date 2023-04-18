<?php

namespace App\Http\Controllers;

#use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
#use DB;
#use Illuminate\Support\Facades\PDF;
#use PDF;

use App\Http\Requests\validadorForm1;
#use Barryvdh\DomPDF\ServiceProvider;

use Barryvdh\DomPDF\Facade\Pdf;
ini_set('max_execution_time', 300); // 5 minutes
class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexUsuario()
    {
        $consultaConsultas = DB::table('usuarios')->get();
        return view('usuarios', compact('consultaConsultas'));
    }

    public function indexDepartamentos()
    {
        $consultaConsultas = DB::table('departamento')->get();
        return view('departamentos', compact('consultaConsultas'));
    }

    public function indexTickets()
    {
        $consultaConsultas = DB::table('tickets')->get();
        return view('tickets', compact('consultaConsultas'));
    }
    public function indexTicketsaux()
    {
        $consultaConsultas = DB::table('tickets')->get();
        return view('ticketsaux', compact('consultaConsultas'));
    }
    public function indexTicketscliente()
    {
        $consultaConsultas= DB::table('tickets')->get();
        return view('ticketscliente', compact('consultaConsultas'));
    }
    public function indexReportes()
    {
        $consultaConsultas = DB::table('departamento')->get();
        $consulta5 = DB::table('tickets')->get();
        return view('reportes', compact('consultaConsultas'), compact('consulta5'));
    }
    public function indexReportesaux()
    {
        $consultaConsultas = DB::table('departamento')->get();
        $consulta5 = DB::table('tickets')->get();
        return view('reportesaux', compact('consultaConsultas'), compact('consulta5'));
    }


    public function indexObservaciones()
    {
        $consultaConsultas = DB::table('tb_observacion')->get();
        return view('observaciones', compact('consultaConsultas'));
    }
    public function indexObservacionesaux()
    {
        $consultaConsultas = DB::table('tb_observacion')->get();
        return view('observacionesaux', compact('consultaConsultas'));
    }
    public function validacion(Request $email)
    {
        if ($email->input("email") == "jefe@gmail.com") {
            return view('home');
        } elseif ($email->input("email") == "auxiliar@gmail.com") {
            return view('homeaux');
        } elseif ($email->input("email") == "cliente@gmail.com") {
            return view('homecliente');
        } else {
            return redirect()->route('Nlogin')->with('message', 'El usuario no se encuentra en la base de datos');
        }
    }
    
    public function pdf()
    {
        $consultaConsultas = DB::table('departamento')->get();
        $pdf = PDF::loadView("generarpdf", ["consultaConsultas" => $consultaConsultas]);
        return $pdf->stream();
    }
    public function pdf2()
    {
        $consulta5 = DB::table('tickets')->get();
        $pdf = PDF::loadView("generarpdf2", ["consulta5" => $consulta5]);
        return $pdf->stream();
    }
    public function pdf3()
    {
        $consultaConsultas = DB::table('departamento')->get();
        $consulta5 = DB::table('tickets')->get();
        $pdf = PDF::loadView("generarpdf3", ["consultaConsultas" => $consultaConsultas], ["consulta5" => $consulta5]);
        return $pdf->stream();
    }

    public function filtro(Request $req)
    {
        if ($req->input("filtrillo") == 0 and $req->input("filtrillo2") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('tickets', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo2") == 0 and $req->input("filtrillo3") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->Where('Status', $req->input("filtrillo"))->get();
            return view('tickets', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo") == 0 and $req->input("filtrillo3") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->whereDate('Creacion', $req->input("filtrillo2"))->get();
            return view('tickets', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo2") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->where('Status', $req->input("filtrillo"))
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('tickets', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo3") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->where('Status', $req->input("filtrillo"))
                ->whereDate('Creacion', $req->input("filtrillo2"))->get();
            return view('tickets', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->whereDate('Creacion', $req->input("filtrillo2"))
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('tickets', compact('consultaConsultas'));
        } else {
            $consultaConsultas = DB::table('tickets')
                ->where('Status', $req->input("filtrillo"))
                ->WhereDate('Creacion', $req->input("filtrillo2"))
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('tickets', compact('consultaConsultas'));
        }
    }

    public function filtroaux(Request $req)
    {
        if ($req->input("filtrillo") == 0 and $req->input("filtrillo2") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo2") == 0 and $req->input("filtrillo3") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->Where('Status', $req->input("filtrillo"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo") == 0 and $req->input("filtrillo3") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->whereDate('Creacion', $req->input("filtrillo2"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo2") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->where('Status', $req->input("filtrillo"))
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo3") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->where('Status', $req->input("filtrillo"))
                ->whereDate('Creacion', $req->input("filtrillo2"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        }
        if ($req->input("filtrillo") == 0) {
            $consultaConsultas = DB::table('tickets')
                ->whereDate('Creacion', $req->input("filtrillo2"))
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        } else {
            $consultaConsultas = DB::table('tickets')
                ->where('Status', $req->input("filtrillo"))
                ->WhereDate('Creacion', $req->input("filtrillo2"))
                ->Where('Departamento', $req->input("filtrillo3"))->get();
            return view('ticketsaux', compact('consultaConsultas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        DB::table('tickets')->insert([
            "Codigo" => $req->input('txtTitulo'),
            "Nombre" => $req->input('txtTitulo1'),
            "Rol" => $req->input('txtTitulo2'),
            "Departamento" => $req->input('txtTitulo3'),
            "Status" => $req->input('txtTitulo4'),
            "Creacion" => Carbon::now()
        ]);
        return redirect('/insertarticket')->with('mensaje', 'Tu consulta se ha guardado en la bd');
    }
    public function storeaux(Request $req)
    {
        DB::table('tickets')->insert([
            "Codigo" => $req->input('txtTitulo'),
            "Nombre" => $req->input('txtTitulo1'),
            "Rol" => $req->input('txtTitulo2'),
            "Departamento" => $req->input('txtTitulo3'),
            "Status" => $req->input('txtTitulo4'),
            "Creacion" => Carbon::now()
        ]);
        return redirect('/insertarticketaux')->with('mensaje', 'Tu consulta se ha guardado en la bd');
    }
    public function storeclient(Request $req)
    {
        DB::table('tickets')->insert([
            "Codigo" => $req->input('txtTitulo'),
            "Nombre" => $req->input('txtTitulo1'),
            "Rol" => $req->input('txtTitulo2'),
            "Departamento" => $req->input('txtTitulo3'),
            "Status" => $req->input('txtTitulo4'),
            "Creacion" => Carbon::now()
        ]);
        return redirect('/insertarticketclient')->with('mensaje', 'Tu consulta se ha guardado en la bd');
    }

    public function store2(Request $req)
    {
        DB::table('usuarios')->insert([
            "Nombre" => $req->input('txtTitulo'),
            "Rol" => $req->input('txtTitulo1'),
        ]);
        return redirect('/insertarusuario')->with('mensaje', 'Tu consulta se ha guardado en la bd');
    }

    public function store3(Request $req)
    {
        DB::table('departamento')->insert([
            "Nombre" => $req->input('txtTitulo'),
            "Ubicacion" => $req->input('txtTitulo1'),
        ]);
        return redirect('/insertardepa')->with('mensaje', 'Tu consulta se ha guardado en la bd');
    }

    public function store4(Request $req)
    {
        DB::table('tb_observacion')->insert([
            "Ticket_id" => $req->input('txtTitulo'),
            "Seguimiento" => $req->input('txtTitulo1'),
            "Cliente_id" => $req->input('txtTitulo2'),
            "Comentario" => $req->input('txtTitulo3'),
        ]);
        return redirect('/observaciones')->with('mensaje', 'Tu consulta se ha guardado en la bd');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaid = DB::table('tickets')->where('Codigo', $id)->First();
        return view('controlTicket', compact('consultaid'));
    }
    public function editaux($id)
    {
        $consultaid = DB::table('tickets')->where('Codigo', $id)->First();
        return view('controlTicketaux', compact('consultaid'));
    }
    public function edit2($id)
    {
        $consultaid = DB::table('usuarios')->where('id', $id)->First();
        return view('editarusuario', compact('consultaid'));
    }
    public function edit3($id)
    {
        $consultaid = DB::table('departamento')->where('id', $id)->First();
        return view('editardepa', compact('consultaid'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update2(Request $req, $id)
    {
        DB::table('usuarios')->where('id', $id)->update([
            "Nombre" => $req->input('txtTitulo'),
            "Rol" => $req->input('txtTitulo1'),

        ]);
        return redirect('usuarios')->with('mensaje', 'Tu consulta está actualizada');
    }
    public function update3(Request $req, $id)
    {
        DB::table('departamento')->where('id', $id)->update([
            "Nombre" => $req->input('txtTitulo'),
            "Ubicacion" => $req->input('txtTitulo1'),

        ]);
        return redirect('departamentos')->with('mensaje', 'Tu consulta está actualizada');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
    }
    public function update(Request $req, $id)
    {
        DB::table('tb_observacion')->insert([
            "Ticket_id" => $req->input('txtTitulo'),
            "Seguimiento" => $req->input('txtTitulo1'),
            "Cliente_id" => $req->input('txtTitulo2'),
            "Comentario" => $req->input('txtTitulo3'),
        ]);
        return redirect('/observaciones')->with('mensaje', 'Tu consulta está actualizada');
    }

    public function updateaux(Request $req, $id)
    {
        DB::table('tb_observacion')->insert([
            "Ticket_id" => $req->input('txtTitulo'),
            "Seguimiento" => $req->input('txtTitulo1'),
            "Cliente_id" => $req->input('txtTitulo2'),
            "Comentario" => $req->input('txtTitulo3'),
        ]);
        return redirect('/observacionesaux')->with('mensaje', 'Tu consulta está actualizada');
    }
    public function destroy($Codigo)
    {
        DB::table('tickets')->where('Codigo', $Codigo)->delete();
        return redirect('/tickets')->with('mensaje', 'Ticket borrado');
    }
    public function destroyaux($Codigo)
    {
        DB::table('tickets')->where('Codigo', $Codigo)->delete();
        return redirect('/ticketsaux')->with('mensaje', 'Ticket borrado');
    }
    public function destroy2($id)
    {
        DB::table('usuarios')->where('id', $id)->delete();
        return redirect('usuarios')->with('mensaje', 'Usuario borrado');
    }
    public function destroy3($id)
    {
        DB::table('departamento')->where('id', $id)->delete();
        return redirect('departamentos')->with('mensaje', 'Departamento borrado');
    }
}
