<?php

use Illuminate\Support\Facades\Route;

// Importa o controller para o arquivo de rotas
use App\Http\Controllers\SiteController;

// Cria uma rota / que levará o usuário para o
// SiteController, na função index
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/sobre-greice', [SiteController::class, 'sobre'])->name('site.sobre');

Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
