<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PoliticaPrivacidadeController;
use App\Http\Controllers\TermosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/termos-de-uso', TermosController::class)->name('police.termos');
Route::get('/politica-de-privacidade', PoliticaPrivacidadeController::class)->name('police.politica');

// Route::post('/contato', [EmailController::class, 'store'])->name('contato.store');
// Route::get('/lista-contatos', [EmailController::class, 'list'])->name('lista-contatos');

