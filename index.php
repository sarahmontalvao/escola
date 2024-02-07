<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id='container'>
        <form action="login.php" method='post' class='form'>
            <h2>FAÇA LOGIN OU CADASTRE-SE</h2>

            <label for="nome"></label>
            <input name='nome' type="nome" placeholder='digite seu nome'>
       
            <label for="email"></label>
            <input name='email' type="email" placeholder='digite seu email'>
       
            <label for="senha"></label>
            <input name='senha' type="password" placeholder='digite sua senha'>
            
            <?php
           
            if(isset($_GET['login']) && $_GET['login'] == 'erro'){
            ?>
              <div class="erro"> <p>usuario ou senha incorreto(s) </p></div>

            <?php } ?>

            <?php
           
            if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
            ?>
              <div  class="erro"> <p>faça login antes de acessar as paginas </p></div>

            <?php } ?>
            


            <button type="submit" >Fazer login</button>

            <div class='infos'>
            <p>
              (<span>aluno</span> = nome: 'user', email: 'user@gmail.com', senha: '123456')
            </p>
            <p> (<span>admin</span> = nome:'adm', email: 'adm@gmail.com', senha: '123456')</p>
          </div>
       
            
        </form>

    </div>
</body>
</html>