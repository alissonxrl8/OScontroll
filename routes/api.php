<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ServicoController;
use App\Http\Controllers\Api\TesteController;
use App\Http\Controllers\Api\UsuariosController;
use App\Http\Controllers\LojaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/', [LoginController::class, 'login'])->name('login');
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('usuarios', [UsuariosController::class, 'index'])->middleware('can:acesso_1');
    //acesso level 1
    Route::middleware(['auth', 'can:acesso_1'])->group(function(){
        Route::post('create', [UsuariosController::class, 'criarUser']);
    }); 
    Route::resource('servicos', ServicoController::class);
});

Route::resource('lojas', LojaController::class);
