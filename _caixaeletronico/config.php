<?php
//Conexão ao banco de dados com nome, usuario e senha no parametro
//para fazer a conexão usa-se um requari 'config.php' com  $sql = $pdo->query($sql); 
try{
$pdo = new PDO("mysql:dbname=caixa_eletronico;host=localhost","root","");
}catch(PDOException $e){
    echo "ERRO:".$e->getMessage();
    exit;
}
?>