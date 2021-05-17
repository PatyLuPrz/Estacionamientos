<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function Send() {
        $registros = Registro::all();
        $details = [
            'title' => 'Reporte de Registros',
            'body' => $registros
        ];
       
        \Mail::to('may.patrics@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        echo("
            <script>
                alert('El mensaje ha sido enviado');
                window.history.back();
            </script>
        ");
    }
}
