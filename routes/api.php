<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Aqui vamos definir a rota POST /api/acessar
Route::post('/acessar', function (Request $request) {

    $email = $request->input('email');
    $senha = $request->input('senha');

    // Lógica de login mínima só pra teste
    if ($email === 'teste@teste.com' && $senha === '123456') {
        return response()->json([
            'ok' => true,
            'mensagem' => 'Login efetuado com sucesso!',
            'usuario' => [
                'email' => $email
            ]
        ]);
    }

    return response()->json([
        'ok' => false,
        'mensagem' => 'Email ou senha incorretos'
    ], 401);
});
