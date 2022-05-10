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
        <p><strong>Excluir Usuários</strong></p>
        <?php
        require 'config.php';
        $nome =  addslashes($_GET['nome']);
        
        if(isset($_GET['id']) && empty($_GET['id']) == false){
            $id = addslashes($_GET['id']);
            
            echo "Deseja ralmente deletar o usuário ".$nome."?";
            echo '<form method="POST"><button type="submit" name="del" value="true">EXCLUIR</button>   
            <a href="http://localhost/cursophp02/_usercontrol/index.php"><input type="button" value="VOLTAR"></a></form>';

            if(isset($_POST['del']) == true){
            $sql = "DELETE FROM usuarios WHERE id='$id'";
            $pdo->query($sql);
            echo "Usuário excluido com sucesso!";
            }
        }else{

            echo "Erro de conexão com BD ou usuário inexistente!";
            
        }
        ?>
        
    <p></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>