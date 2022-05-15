<?php
        //PDO é uma biblioteca resposável por fazer a conexão entre o php e o BD
        //no exemplo temos o SGBD com o BD e o host associado, no caso o IP é localhost.
        $dsn = "mysql:dbname=blog;host=127.0.0.1";
        $dbuser = "root";
        $dbpass = "";


        try{
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $sql = "INSERT INTO usuarios VALUE
            ('6','Jose','emailseis@email.com','6666')";
            $sql = $pdo->query($sql);
            echo "Inserido com sucesso id nr: ".$pdo->lastInsertId();
           
        } catch(PDOException $e){
            echo "Falhou: ".$e->getMessage();
        }
        ?>