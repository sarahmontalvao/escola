<?php
include_once('validadorAcesso.php');
include_once('adm-verificacao.php');
include_once('cursosArquivo.php');

$curso_id = null;

if(isset($_GET['id'])){
    $curso_id = $_GET['id'];
}


$cursoInfo = null;

foreach ($cursos as $curso) {
   if($curso['id'] === intval($curso_id)){
    $cursoInfo = $curso;
    break;
   }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Educacional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id='container'>
    <div class='matriculaContainer'>
      <h2><?= $cursoInfo['curso'] ?></h2>
      <h3><?= $cursoInfo['conteudo'] ?></h3>
      <h3><?= $cursoInfo['turma'] ?></h3>
      <a href="confirmar-matricula.php?id=<?= $cursoInfo['id'] ?>" class='btn-matricula'>Confirmar matrícula</a>


    </div>

    
     
</div>
    
</body>

</html>