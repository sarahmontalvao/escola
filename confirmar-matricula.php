<?php
session_start();

include_once('cursosArquivo.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $curso_id = $_GET['id'];

  
    foreach ($cursos as &$curso) {
        if ($curso['id'] == $curso_id) {
            $curso['matriculado'] = true;
            break;
        }
    }

   
    file_put_contents('cursosArquivo.php', '<?php $cursos = ' . var_export($cursos, true) . ';');

  
    $_SESSION['success_message'] = 'Matrícula realizada com sucesso!';

   
    header('Location: cursos-exibicao.php');
    exit;
} else {
   
    header('Location: erro.php');
    exit;
}
?>
