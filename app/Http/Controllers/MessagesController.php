<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessagesController extends Controller
{
    public function listarMensajes(){
        $messages = Message::all();
        return view('messages', ['messages' => $messages]);
    }

    public function mostrarEditar(){
        return view('editar');
    }

    public function solicitudEdicion($id){
        $mensaje = Message::findOrFail($id);
        return view('editar')->with('mensaje', $mensaje);
    }

    public function editarMensaje(Request $request, $id){
        $mensaje = Message::findOrFail($id);
        $validatedData = $request->validate([
            'text' => 'required|string',
            'subrayado' => 'required|boolean',
            'negrita' => 'required|boolean',
        ],[
            'negrita.boolean'=>'Valor no permitido, debes introducir 0 para false o 1 para true',
            'subrayado.boolean'=>'Valor no permitido, debes introducir 0 para false o 1 para true'
        ]);
        $mensaje->text = $validatedData['text'];
        $mensaje->subrayado = $validatedData['subrayado'];
        $mensaje->negrita = $validatedData['negrita'];
        $mensaje->save();

        return redirect()->route('exito.mostrar');
    }

    public function mostrarExito(){
        return view('exito');
    }
    
}
