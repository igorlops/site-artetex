<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'mensagem' => 'required',
        ]);
        Contato::create($data);
        Mail::to('claudioigorai@gmail.com')->send(new ContactFormMail($data));

        return redirect()->route('index')
            ->with('message', 'Obrigado por nos contatar, logo mais entraremos em contato!');
    }

    public function list(){
        $contatos = Contato::orderBy('id','desc')->paginate(5);
        return view('contato.list',compact('contatos'));
    }
}
