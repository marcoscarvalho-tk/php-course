<?php

//erro de rowcount normalmente é causado por um erro de sintaxe 
//verifique o PDO e a query

try{
    $pdo = new PDO("mysql:dbname=blog;host=localhost","root","");

    //a funçao setAttribute abaixo cria uma lista mais detalhada de erros 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo "FALHA: ".$e->getMessage();
}

$sql = "SELECT * FROM usuariosS";//erro na query um S a mais em usuarios.
$sql = $pdo->query($sql);

echo "TOTAL DE NOMES: ".$sql->rowCount();
?>