<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function Index(){
        $registros = Registro::all();
        return view('registros.index',compact('registros'));
    }
}
