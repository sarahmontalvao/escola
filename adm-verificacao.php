<?php



if($_SESSION['tipo_usuario'] === 'admin'){
    include_once('menu-adm.php');
}else{
    include_once('menu.php');
}
?>