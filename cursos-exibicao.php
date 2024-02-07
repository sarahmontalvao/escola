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
    <title>Cursos em Exibição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Cursos Disponíveis</h1>
        <div class='curso-container'>
        <?php
        // Verificar se há cursos
        if (count($cursos) > 0) {
            foreach ($cursos as $curso) {
                ?>
                <div class='curso'>
                    <h2><?= $curso['curso'] ?></h2>
                    <p><?= $curso['conteudo'] ?></p>
                    <h3><?= $curso['turma'] ?></h3>
                    <p>Matriculado: <?= $curso['matriculado'] ? 'Sim' : 'Não' ?></p>
                    <?php if (!$curso['matriculado']) { ?>
                        <a href="matriculaCurso.php?id=<?= $curso['id'] ?>" class="btn-matricula">Matricular</a>
                    <?php } else { ?>
                        <p>Você já está matriculado neste curso.</p>
                    <?php } ?>
                    <hr>
                </div>
                <?php
                
            }
        } else {
            echo "<p>Não há cursos disponíveis.</p>";
        }
        ?>
        </div>
    </div>
</body>
</html>
