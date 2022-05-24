<?php 
try{
$pdo = new PDO("mysql:dbname=#;host=localhost","id","#");

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}


?>