<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', [MessagesController::class,'listarMensajes'])->name('mensajes.listar');

Route::get('/editar',[MessagesController::class,'mostrarEditar'])->name('editar.mostrar');
Route::post('/messages/{id}',[MessagesController::class,'solicitudEdicion'])->name('edicion.solicitud');
Route::put('/messages/editar/{id}',[MessagesController::class,'editarMensaje'])->name('edicion.procesar');

Route::get('/exito', [MessagesController::class,'mostrarExito'])->name('exito.mostrar');