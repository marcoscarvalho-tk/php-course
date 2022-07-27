<?php
try{
    $pdo = new PDO('mysql:dbname=test;host=localhost',"root","");
}catch(PDOExeption $e){
    echo "ERRO: ".$e->getMessage();
}

?>