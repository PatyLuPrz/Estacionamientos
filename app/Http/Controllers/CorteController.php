<?php

namespace App\Http\Controllers;

use App\Models\Corte;
use App\Models\DetalleCorte;
use App\Models\Registro;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;
use stdClass;

class CorteController extends Controller
{
    public function Index(){
        $cortes = Corte::all();
        $resultado = array();
        // $detalles = Registro::join("detalle_cortes","detalle_cortes.id_registro", "=", "registros.id_registro")->select('*')->get();
        foreach ($cortes as $corte){
            $detalle = Registro::join("detalle_cortes","detalle_cortes.id_registro", "=", "registros.id_registro")
            ->where("detalle_cortes.id_corte", "=", $corte->id_corte)->select('*')->get();
            $arr = array(
                'id_corte' => $corte->id_corte,
                'fecha' => $corte->fecha,
                'fechaAnterior' => $corte->fechaAnterior,
                'totalCorte' => $corte->totalCorte,
                'totalReg' => $corte->totalReg,
                'detalle' => $detalle,
            );
            array_push($resultado,json_encode($arr));
        }
        
        return view('cortes.index',compact('resultado'));
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
