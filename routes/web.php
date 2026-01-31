<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// -----------------------------
// /teste (rota simples)
// -----------------------------
Route::get('/teste', function () {
    return response()->json(['msg' => 'rota web funcionando']);
});

// -----------------------------
// /bem-vindo (rota de boas-vindas)
// -----------------------------
Route::get('/', function () {
    return response()->json(['msg' => 'Seja bem-vindo à API Laravel!']);
});

// -----------------------------
// /listagem-usuarios (GET)
// -----------------------------
Route::get('/listagem-usuarios', function () {
    // Banco fictício só para exibir
    $usuariosFicticios = [
        ['email' => 'teste@teste.com', 'senha' => '123456', 'dt_nascimento' => '2000-01-01'],
        ['email' => 'izabelle@teste.com', 'senha' => 'abc123', 'dt_nascimento' => '1995-05-10']
    ];

    return response()->json([
        'status' => 'sucesso',
        'usuarios' => $usuariosFicticios
    ]);
});


// Rota POST /acessar sem /api
Route::post('/acessar', function (Request $request) {

    $email = $request->input('email');
    $senha = $request->input('senha');

    // Lógica mínima de login apenas para teste
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
