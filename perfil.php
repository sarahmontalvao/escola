<?php
include_once('validadorAcesso.php');
include_once('adm-verificacao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="perfil">
            <img src='img/perfil.png' alt="Foto de Perfil">
            <h2>nome: <?=$_SESSION['nome'] ?></h2>
            <h2>e-mail: <?=$_SESSION['email'] ?></h2>
        </div>
        <div class="cursosPerfil">
           
        <a href='cursos-exibicao.php'><button>VER CURSOS MATRICULADOS</button></a>
          
        </div>
    </div>
</body>
</html>
