<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidaController extends Controller
{
    // MESMA COISA NA HOME PARA MOSTRAR OS REGISTROS!!!!
    public function bebidas()
    {
        $registros=Bebida::all();
        return view('bebidas', compact('registros'));
    }
}
