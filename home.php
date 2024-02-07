<?php
include_once('validadorAcesso.php');
include_once('adm-verificacao.php');

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
    <div id="container">
        <h1>Bem vindo, <?= $_SESSION['nome'] ?>!</h1>
    <div class='banner'>
            <img src="img/escola2.jpg" alt="">

        </div>
        <div class='curso-container'>
        <?php
         include 'cursosArquivo.php';
         foreach($cursos as $curso){ ?>

            <div class='curso'>
                <h2><?= $curso['curso'] ?></h2>
                <p><?= $curso['conteudo'] ?></p>
                <h3><?= $curso['turma'] ?></h3>
                <?php if ($curso['matriculado'] === false) { ?>
                    <a class='btn-matricula' href="matriculaCurso.php?id=<?= $curso['id'] ?>">MATRICULAR</a>
                <?php } else { ?>
                    <p>Matrícula ativa</p>
                <?php } ?>
            </div>

                    
            

        <?php
          }
        ?>
        </div>
       

    </div>
    
</body>


</html>

