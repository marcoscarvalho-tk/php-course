<?php

global $pdo;

try{    
    $pdo = new PDO("mysql:dbname=test;host=localhost","root","");
}catch(PDOEXception $e){
    echo "ERRO: ".$e->getMessage();
}
?>