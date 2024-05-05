<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaPrivacidadeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view("police.politica");
    }
}
