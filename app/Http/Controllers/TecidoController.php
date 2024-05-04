<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecidoController extends Controller
{
    public function index(){
        return view("tecidos.index");
    }
}
