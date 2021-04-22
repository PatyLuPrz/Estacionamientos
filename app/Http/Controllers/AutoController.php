<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function Index(){
        return "Index de autos";
    }

    public function Create(){
        return "Create";
    }

    public function Store(Request $request){
        return "Store";
    }

    public function Show(Auto $auto){
        return "show";
    }

    public function Edit(Auto $auto){
        return "Edit";
    }

    public function Update(Request $request,Auto $auto){
        return "Update";
    }
}
