<?php
session_start();
require 'config.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    $valor = str_replace(",",".", $_POST['valor']);
    $valor = floatval($valor);
    //esta condição verifica o post do select 'tipo' e o post input 'valor'
    //se setado insere as alterações no referente BD 

    $sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
    $sql->bindValue("id_conta", $_SESSION['banco']);
    $sql->bindValue(":tipo", $tipo);
    $sql->bindValue(":valor", $valor);
    $sql->execute();

    if($tipo == '0') {
        //esta condição adiciona o valor a tabela 'contas'
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }else{
        //esta condiçao subtrai o valor da tabela 'contas'
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }
    //caso não seja setado nada ou apos a opreaçao a função retorna ao index.php
    header("Location: _index.php");
    exit;
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
            Tipo de transação: <br/>
            <select name="tipo">
                <option value="0">Depósito</option>
                <option value="1">Saque</option>
            </select><br/><br/>

            valor:<br/>

            <input type="text" name="valor" pattern="[0-9.,]{1,}"/><br/><br/>
            <!-- o pattern estipula apenas numeros-->
            <input type="submit" value="Realizar"/>
            
            
        </form>
    
   
    <p> </p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>