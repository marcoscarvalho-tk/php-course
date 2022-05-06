<?php
session_start();
require 'config.php';

if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])){
    $id = $_SESSION['banco'];
    //se a conexão estiver OK verifica-se a SESSION 
    //em seguida retorna-se na <section> as variaves solicitadas na query
    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue("id", $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $info = $sql->fetch();
    }else{
        header("Location: login.php"); 
        exit;
    }
}else{
    //caso contrario retorna-se a pg de login
    header("Location: login.php");
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
    <p><strong>BANK OF MARK</strong></p>
        <p><strong>Caixa Eletrônico</strong></p>
        Titular: <?php echo $info['titular'];?><br/>
        Agência: <?php echo $info['agencia'];?> &ensp;
        Conta: <?php echo $info['conta'];?><br/>
       
        <button><a href="exit.php">Sair</a></button>
        <!--botão para chamar a pagina exit e encerrar a sessao-->
        <hr/>
        <h3>Movimentação/Extrato</h3>
       <p> Saldo: <font color="blue"><strong>
       
       <?php echo $info['saldo'];?></strong></font></p>

          <button> <a href="add-transacao.php">Realizar uma Transação</a></button> 
            <!--botão para fazer a chamada a pg transação.php-->
        <table width="500">
        <!--tabela para gerar a movimentação do cliente-->
            <tr>
                <th>Data</th>
                <th>Valor</th>
            </tr>
            <?php
            //mostra a movimentação atual apos a entrada na pagina e apos movimentaçoes posteriores
            //a movimentação de todas as contas é armazendada numa mesma tabela
            //porém o retorno da query seleciona apenas as referentes ao id da SESSION 
            $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
            $sql->bindValue("id_conta", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $item){
                    echo '<tr>';
                        echo '<td>'. date('d/m/Y H:i', strtotime($item['data_operacao'])).'</td>';
                        echo  $item['tipo'] == 0 ? '<td><font color="green">R$'. $item['valor']. '</font></td>'
                            :'<td><font color="red"> - R$'. $item['valor']. '</font></td>';
                    echo '</tr>';
                    //existe uma outra meneira de mostrar a tabela, inserindo php apos as tags
                }
            }
            ?>
        </table>
         
    <p></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>