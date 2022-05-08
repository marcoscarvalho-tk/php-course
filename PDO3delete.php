<?php
        //PDO é uma biblioteca resposável por fazer a conexão entre o php e o BD
        //no exemplo temos o SGBD com o BD e o host associado, no caso o IP é localhost.
        $dsn = "mysql:dbname=blog;host=127.0.0.1";
        $dbuser = "root";
        $dbpass = "";


        try{
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $sql = "DELETE FROM usuarios WHERE id= 6";
            $pdo->query($sql); //funciona caso não seja necessario um retorno
            $sql = $pdo->query($sql);
            echo "Usuario deletado com sucesso";
           
        } catch(PDOException $e){
            echo "Falhou: ".$e->getMessage();
        }
        ?>