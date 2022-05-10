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
        <p><strong>Editar Usuários</strong></p>
        <?php
        require 'config.php';
        // declara a variavel $id como zero
        $id = 0;
        // se o metodo GET for passado pela pagina _index.php ele entrará nesta condição.
        if(isset($_GET['id']) && empty($_GET['id']) == false){
            $id = addslashes($_GET['id']);
        }
        // se o metodo POST for passado nesta pagina entrará nesta condição para editar.
        if(isset($_POST['nome']) && empty($_POST['nome']) == false){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id='$id'";
            $pdo->query($sql);
        //apos a edição voltará a pagina index.php automaticamente com esta função.
            header("Location: _index.php");
        }

        //caso o $id for passado pelo GET os dados serão inseridos nos campos nesta condição.
            $sql = "SELECT * FROM usuarios WHERE id='$id'";
            $sql = $pdo->query($sql);
            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
        //caso o $id não seja passado pelo GET e não receba um valor valido etrará nesta condição       
            }else{
        //entrando nesta condição esta pagina será redirecionada para a pagina index.php        
                header("Location: index.php");
            }
       
        ?>
         <form method="POST">
            Nome: <br/>
            <input type="text" name="nome" value="<?php echo $dado['nome'];?>"/><br/><br/>
            E-mail:<br/>
            <input type="text" name="email" value="<?php echo $dado['email']?>"/><br/><br/>
            
            <input type="submit" value="Atualizar"/>
            <a href="http://localhost/cursophp02/_usercontrol/index.php"><input type="button" value="voltar"></a>
        </form>
    
   
    <p></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>