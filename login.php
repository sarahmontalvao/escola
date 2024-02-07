<?php
session_start();

$autenticado = 'nao';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha']; 

$tipo_usuario = null;

$usuarios = array(
    array('id' => 1, 'nome' => 'user', 'email' => 'user@gmail.com', 'senha' => '123456', 'tipo' => 'aluno'),
    array('id' => 2, 'nome' => 'maria', 'email' => 'maria@gmail.com', 'senha' => '123456', 'tipo' => 'aluno'),
    array('id' => 3, 'nome' => 'jose', 'email' => 'jose@gmail.com', 'senha' => '123456', 'tipo' => 'aluno'),
);

$usuariosADM = array(
    array('id' => 1, 'nome' => 'adm', 'email' => 'adm@gmail.com', 'senha' => '123456', 'tipo' => 'admin'),
    array('id' => 2, 'nome' => 'professor', 'email' => 'professor@gmail.com', 'senha' => '123456', 'tipo' => 'admin'),
);

foreach ($usuariosADM as $user) {
    if ($nome === $user['nome'] && $email === $user['email'] && $senha === $user['senha']) {
        $autenticado = 'sim'; 
        $tipo_usuario = $user['tipo'];
        break;
    }
}

if ($autenticado === 'nao') {
    foreach ($usuarios as $user) {
        if ($nome === $user['nome'] && $email === $user['email'] && $senha === $user['senha']) {
            $autenticado = 'sim'; 
            $tipo_usuario = $user['tipo'];
            break;
        }
    }
}

if ($autenticado === 'sim') { 
    $_SESSION['autenticado'] = 'sim';
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['tipo_usuario'] = $tipo_usuario;
    header('Location: home.php');
    exit;
} else {
    $_SESSION['autenticado'] = 'nao'; 
    header('Location: index.php?login=erro');
    exit;
}
?>
