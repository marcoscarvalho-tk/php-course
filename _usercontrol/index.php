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
        <p><strong> Controle de Usuários</strong></p>
        <?php
        session_start();
        require 'config.php';
        ?>
       
        <button type="submit"><a href="adicionar.php">Adicionar Novo Usuário</button></a>
        <a href="http://localhost/cursophp02/_usercontrol/index.php?log=logout"><input type="submit" value="SAIR"></a>
        <table border="0" width="100%">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        <?php
        if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $usuario){
                    echo '<tr>';
                    echo '<td>'.$usuario['id'].'</td>';
                    echo '<td>'.$usuario['nome'].'</td>';
                    echo '<td>'.$usuario['email'].'</td>'; 
                    echo '<td><button type="submit"><a  href="editar.php?id='.$usuario['id'].'">Editar</a></button> 
                    <button type="submit"><a href="excluir.php?id='.$usuario['id'].'&nome='.$usuario['nome'].'">Excluir</a></button></td>';
                    echo '</tr>';
                }
            }
        }else{
            header("Location: login.php");
        }    
        /*OBS: para realizar um cadastro de senhas criptografadas do tipo md5
        é importante estruturar o tipo como varchar de tamanho 32 caracteres*/
        ?>
        </table>

       
        <?php
        //Condição para voltar a pagina de login encerrando a sessão
        
        if(isset($_GET["log"])== "logout"){
            session_destroy();
            header("Location:login.php");
            exit;
        }
        ?>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>
