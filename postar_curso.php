<?php

include_once('validadorAcesso.php');
include_once('adm-verificacao.php');
include_once('cursosArquivo.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postar Cursos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id='container'>
    <form class='form' action="novo-curso-validar.php" method="post">
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required >

        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma" required>

        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo" required></textarea><br><br>

        <input type="submit" value="Postar Curso">
    </form>
    </div>
</body>
</html>
