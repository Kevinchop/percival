<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acceso;
use Illuminate\Support\Facades\DB;

class InicialController extends Controller
{
    public function index(){
        //variable vectoriana de ejemplo
        $vector_alumno = [18, 20, 45];

        //retorno para la vista lo que quiera manerjar desde allá
        // return view('index', compact('vector')); el compact me ahorra si la variable que quiero mandar deberia mantener el nombre

        // $datos = Acceso::all();
        $datos = DB::table('accesos')->paginate(3);
        return view('index', compact('datos'));
    }
}
