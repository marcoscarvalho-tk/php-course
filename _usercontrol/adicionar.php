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
        <p><strong>Cadastro de Usuários</strong></p>
        <?php
        require 'config.php';

            if(isset($_POST['nome']) && empty($_POST['nome']) == false){
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));

                $sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha'";
                $pdo->query($sql);

                header("Location:index.php");
            }
        ?>
        <form method="POST">
            Nome: <br/>
            <input type="text" name="nome" /><br/><br/>
            E-mail:<br/>
            <input type="text" name="email"/><br/><br/>
            Senha:<br/>
            <input type="password" name="senha"/><br/><br/>
            <input type="submit" value="Cadastrar"/>
            <a href="http://localhost/cursophp02/_usercontrol/index.php"><input type="button" value="voltar"></a>
        </form>
    
   
    <p></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>