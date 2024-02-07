<?php
include_once('cursosArquivo.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['curso']) && isset($_POST['turma']) && isset($_POST['conteudo'])) {
        $novoCurso = array(
            'id' => count($cursos) + 1, 
            'curso' => $_POST['curso'],
            'turma' => $_POST['turma'],
            'conteudo' => $_POST['conteudo'],
            'matriculado' => false 
        );

        $cursos[] = $novoCurso;

        
        file_put_contents('cursosArquivo.php', '<?php $cursos = ' . var_export($cursos, true) . ';');
        
        echo "<p>Curso postado com sucesso!</p>";
       header('location:cursos-exibicao.php');
    } else {
        echo "<p>Todos os campos do formulário são obrigatórios.</p>";
    }
}
?>
