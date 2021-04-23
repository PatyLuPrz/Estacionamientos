<?php

namespace App\Http\Controllers;

use App\Models\Corte;
use App\Models\DetalleCorte;
use App\Models\Registro;
use Illuminate\Http\Request;

class CorteController extends Controller
{
    public function Index(){
        $cortes = Corte::all();
        return view('cortes.index',compact('cortes'));
    }

    public function Show($id_corte){
        $corte = Corte::all()->where('id_corte',$id_corte)->first();
        $detalle = Registro::join("detalle_cortes","detalle_cortes.id_registro", "=", "registros.id_registro")
        ->where("detalle_cortes.id_corte", "=", $id_corte)->select('*')->get();
        return view('cortes.show',compact('corte','detalle'));
    }

    public function Edit($id_corte){
        $corte = Corte::all()->where('id_corte',$id_corte)->first();
        return view('cortes.edit',compact('corte'));
    }

    public function Update(Request $request,$id_corte){
        $corte = Corte::all()->where('id_corte',$id_corte)->first();
        $corte->fecha = $request->fecha;
        $corte->fechaAnterior = $request->fechaAnterior;
        $corte->totalCorte = $request->totalCorte;
        $corte->totalHrsCobradas = $request->totalHrsCobradas;
        $corte->totalReg = $request->totalReg;
        $corte->save();
        return redirect()->route('cortes.show',$corte->id_corte);
    }
}
