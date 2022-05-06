<?php
session_start();
//inicia a sessao

require 'config.php';
//faz a chamada da pagina config.php para realizar a conexão

if(isset($_POST['agencia']) && !empty($_POST['agencia'])) {
//condição para verificar se foi inserido os dados requeridos  
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia 
    AND conta = :conta  AND senha = :senha");
    // caso sim, verifica a existencia do dados no BD
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        //se os dados existem inicia-se a SESSION dando acesso a pagina index.php
        $_SESSION['banco'] = $sql['id'];
        header("Location: _index.php");
        exit;
    }
}

?>

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
       
        <form method="POST">
            Agência: <br/>
            <input type="text" name="agencia" /><br/><br/>
            Conta:<br/>
            <input type="text" name="conta"/><br/><br/>
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