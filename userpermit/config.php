<?php

global $pdo;

try{
$pdo = new PDO("mysql:dbname=test;host=localhost","root","");

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}
?>