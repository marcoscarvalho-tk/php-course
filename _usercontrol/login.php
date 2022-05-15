<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Curso PHP intermediário</h1>
</header>
    <section>
        <p><strong>Página de login</strong></p>
        <?php
        require 'config.php';
        session_start();

        if(isset($_POST['email']) && empty($_POST['email']) == false){
            //IMPORTATE!! qualquer informaçao passada pelo usuario
            //deve ser tratada como NÂO confiavel 
            //a funçao abaixo addslashes() traz mais segurança para o sistema.
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
            $sql = $pdo->query($sql);

            if($sql->rowCount() > 0){

                $dado = $sql->fetch();
                $_SESSION['id'] = $dado['id'];
                header("Location: index.php");
                
            }

        }
        ?>
        <form method="POST">
            Nome: <br/>
            <input type="text" name="nome" /><br/><br/>
            E-mail:<br/>
            <input type="text" name="email"/><br/><br/>
            Senha:<br/>
            <input type="password" name="senha"/><br/><br/>
            <input type="submit" value="Entrar"/>
            
        </form>
    
   
    <p> </p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>