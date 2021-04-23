<?php

namespace Database\Seeders;

use App\Models\Corte;
use App\Models\DetalleCorte;
use App\Models\Registro;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $corte = new Corte();
        $corte->fecha = '2019-01-02 07:12:22';
        $corte->fechaAnterior = '2018-12-31 14:05:23';
        $corte->totalCorte = '0';
        $corte->totalHrsCobradas = '0';
        $corte->totalReg = '0';
        $corte->save();
        $corte = new Corte();
        $corte->fecha = '2019-01-03 07:19:07';
        $corte->fechaAnterior = '2019-01-02 07:12:22';
        $corte->totalCorte = '3680';
        $corte->totalHrsCobradas = '230';
        $corte->totalReg = '110';
        $corte->save();
        $corte = new Corte();
        $corte->fecha = '2019-01-04 07:16:29';
        $corte->fechaAnterior = '2019-01-03 07:19:07';
        $corte->totalCorte = '5248';
        $corte->totalHrsCobradas = '328';
        $corte->totalReg = '165';
        $corte->save();
        $corte = new Corte();
        $corte->fecha = '2019-01-05 07:32:14';
        $corte->fechaAnterior = '2019-01-04 07:16:29';
        $corte->totalCorte = '5148';
        $corte->totalHrsCobradas = '324';
        $corte->totalReg = '164';
        $corte->save();
        $registro = new Registro();
        $registro->fechaentrada = '2019-01-01 21:45:06';
        $registro->fechasalida = '2019-01-02 07:05:07';
        $registro->tiempo = '9 Hrs. 20 Min.';
        $registro->placas = '1';
        $registro->dejoLLave = '0';
        $registro->cancelado = '1';
        $registro->salida = '0';
        $registro->hrsCobradas = '0';
        $registro->perdioTicket = '3';
        $registro->sinronizado = '1';
        $registro->pagado = '1';
        $registro->totalPagado = '50';
        $registro->iva = '6.9';
        $registro->noNoches = '1';
        $registro->save();
        $registro = new Registro();
        $registro->fechaentrada = '2019-01-02 07:12:47';
        $registro->fechasalida = '2019-01-02 15:27:37';
        $registro->tiempo = '8 Hrs. 14 Min.';
        $registro->placas = '1';
        $registro->dejoLLave = '0';
        $registro->cancelado = '1';
        $registro->salida = '9';
        $registro->hrsCobradas = '0';
        $registro->perdioTicket = '3';
        $registro->pagado = '1';
        $registro->totalPagado = '0';
        $registro->iva = '0';
        $registro->noNoches = '0';
        $registro->sinronizado = '1';
        $registro->save();
        $registro = new Registro();
        $registro->fechaentrada = '2019-01-02 07:12:47';
        $registro->fechasalida = '2019-01-02 15:27:37';
        $registro->tiempo = '8 Hrs. 14 Min.';
        $registro->placas = '1';
        $registro->dejoLLave = '0';
        $registro->cancelado = '1';
        $registro->salida = '9';
        $registro->hrsCobradas = '0';
        $registro->perdioTicket = '3';
        $registro->pagado = '1';
        $registro->totalPagado = '0';
        $registro->iva = '0';
        $registro->noNoches = '0';
        $registro->sinronizado = '1';
        $registro->save();
        $registro = new Registro();
        $registro->fechaentrada = '2019-01-02 07:12:47';
        $registro->fechasalida = '2019-01-02 15:27:37';
        $registro->tiempo = '8 Hrs. 14 Min.';
        $registro->placas = '1';
        $registro->dejoLLave = '0';
        $registro->cancelado = '1';
        $registro->salida = '9';
        $registro->hrsCobradas = '0';
        $registro->perdioTicket = '3';
        $registro->pagado = '1';
        $registro->totalPagado = '0';
        $registro->iva = '0';
        $registro->noNoches = '0';
        $registro->sinronizado = '1';
        $registro->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '1';
        $detallecorte->id_registro = '1';
        $detallecorte->numreg = '1';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '1';
        $detallecorte->id_registro = '2';
        $detallecorte->numreg = '2';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '2';
        $detallecorte->id_registro = '3';
        $detallecorte->numreg = '1';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '2';
        $detallecorte->id_registro = '1';
        $detallecorte->numreg = '2';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '3';
        $detallecorte->id_registro = '2';
        $detallecorte->numreg = '1';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '3';
        $detallecorte->id_registro = '3';
        $detallecorte->numreg = '1';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '4';
        $detallecorte->id_registro = '1';
        $detallecorte->numreg = '1';
        $detallecorte->save();
        $detallecorte = new DetalleCorte();
        $detallecorte->id_corte = '4';
        $detallecorte->id_registro = '2';
        $detallecorte->numreg = '1';
        $detallecorte->save();
    }
}
