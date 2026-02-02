<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

// SUAS 3 APIs DO GITHUB
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/listagem-usuarios') {
    echo json_encode([
        'status' => 'sucesso',
        'usuarios' => [
            ['email' => 'izabelle@teste.com', 'senha' => 'abc123', 'dt_nascimento' => '1995-05-10'],
            ['email' => 'teste@teste.com', 'senha' => '123456', 'dt_nascimento' => '2000-01-01']
        ]
    ]);
    
} elseif ($_POST['email'] && $uri == '/acessar') {
    echo json_encode([
        'status' => 'sucesso',
        'email' => $_POST['email']
    ]);
    
} elseif ($_POST['email'] && $uri == '/registrar') {
    echo json_encode([
        'status' => 'sucesso',
        'mensagem' => 'Usuário registrado com sucesso'
    ]);
    
} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Rota não encontrada']);
}
?>
