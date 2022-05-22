<?php
require 'config.php';

$h = isset($_GET['h'])? $_GET['h']:'';

if(!empty($_GET['h'])){
    $sql = "UPDATE cadastro SET status = 1 WHERE MD5(id) = '$h'";
    $sql = $pdo->query($sql);

    echo "<h2>Cadastro confirmado com sucesso!</h2>";
}
?>