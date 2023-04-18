<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPaginas extends Controller
{
    function Flogin(){
        return view ('login');
    }

    function Fhome(){
        return view ('home');
    }

    function Fusuario(){
        return view ('usuarios');
    }

    function Fdepartamentos(){
        return view ('departamentos');
    }

    function Ftickets(){
        return view ('tickets');
    }

    function Freportes(){
        return view ('reportes');
    }

    function Fobservaciones(){
        return view ('observaciones');
    }

    function FperfilJefe(){
        return view ('perfilJefe');
    }

    function FformJefe(){
        return view ('formJefe');
    }

    function FperfilAuxiliar(){
        return view ('perfilAuxiliar');
    }

    function FformAuxiliar(){
        return view ('formAuxiliar');
    }

    function FperfilCliente(){
        return view ('perfilCliente');
    }

    function FformCliente(){
        return view ('formCliente');
    }


    //////////////////////////////////////

    function Finsertarticket(){
        return view ('formulariocrud');
    }
    function Finsertarticketaux(){
        return view ('formulariocrudaux');
    }
    function Finsertarticketclient(){
        return view ('formulariocrudclient');
    }

    function Finsertarusuario(){
        return view ('insertarusuario');
    }

    function Finsertardepa(){
        return view ('insertardepa');
    }

    function Fconsultascrud(){
        return view ('consultascrud');
    }

}
