<?php
require 'config.php';

if(isset($_POST['nome']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $sql = "INSERT INTO cadastro SET nome = '$nome', email = '$email'";
    $sql = $pdo->query($sql);
    $id = $pdo->lastInsertId();

    $md5 = md5($id);

    $link = 'http://www.marcoscarvalho.tk/cadastroConfirm/confirmar.php?='.$md5;

    $assunto = "Confirmação de cadastro";
    $msg = "Clique no link abaixo para confirmar seu cadastro:\n\n".$link;
    $headers = "From: marcoscarvalho.tk"."\r\n".
                "X-Mailer: PHP/".phpversion();

    mail($email, $assunto, $msg, $headers);

    echo "<h2>OK! Confirme o seu cadastro agora no seu email!</h2>"; 

    exit;
    // para não mostrar o formulario

}
?>
<h1>Cadastro com confirmação</h1>
<form method="POST">
    <label for="nome">NOME</label>
    <input type="text" name="nome">
    <label for="email">EMAIL</label>
    <input type="email" name="email">
    <input type="submit" name="Cadastrar">
</form>