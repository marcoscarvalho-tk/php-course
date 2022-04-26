<?php
        //PDO é uma biblioteca resposável por fazer a conexão entre o php e o BD
        //no exemplo temos o SGBD com o BD e o host associado, no caso o IP é localhost.
        $dsn = "mysql:dbname=blog;host=127.0.0.1";
        $dbuser = "root";
        $dbpass = "";


        try{
           $pdo = new PDO($dsn, $dbuser, $dbpass);
           $nome = 'Pedro'; //variavel vida de um method $nome = $_POST['Cesar']
           $id = 5;//variavel vida de um method $id = $_POST['5']
           $senha = md5('5555');
           //este modo declara uma variavel provisorio 
           //que será passado por um method e substituido pela função bindValue()
           //isso torna a query mais segura
           $sql = "UPDATE usuarios SET nome = :novonome, senha = :novasenha WHERE id = :id";
           //esta fução "prepara" o pdo para receber a query
           $sql = $pdo->prepare($sql);
           //esta função substitui a variavel provisoria pela definitiva
           $sql->bindValue(':novonome', $nome);
           $sql->bindValue(':id', $id);
           $sql->bindValue(':novasenha', $senha);
           //esta função executa a query 
           $sql->execute();
           echo "Update realizado com sucesso!";
            
        } catch(PDOException $e){
            echo "Falhou: ".$e->getMessage();
        }
?>