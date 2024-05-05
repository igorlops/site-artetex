<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoliticaPrivacidadeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TecidoController;
use App\Http\Controllers\TermosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre.index');
Route::get('/tecidos', [TecidoController::class, 'index'])->name('tecido.index');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.store');

Route::get('/termos-de-uso', TermosController::class)->name('police.termos');
Route::get('/politica-de-privacidade', PoliticaPrivacidadeController::class)->name('police.politica');
