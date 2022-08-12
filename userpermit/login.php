<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>   
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <?php
    session_start();
    require 'config.php';
    require 'usuarios.class.php';
    
    if(!empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];

        $usuarios = new Usuarios($pdo);

        if($usuarios->fazerLogin($email,$senha)){
            header("Location: _index.php");
            exit;
        }else{
            echo "Usuário e/ou senha estão icorretos!";
        }
    }

    ?>
    <div class ="container">
     <header>
        <h1>Curso PHP</h1>

    </header>
    <section>
    <p><strong>Permissão de usuários</strong><br/></p>
        <h1><strong>LOGIN</strong></h1>
        <form method="POST">
            <div class="form-group w-50 mx-auto">
                <label for="email">EMAIL</label>
                <input type="email" name="email" class="form-control">
                <label for="senha">SENHA</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
             
      
    </section>       
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
 
</body>
</html>


<?php 


?>