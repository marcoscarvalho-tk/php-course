<?php
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao, 'test'); 
if(isset($_POST['value']))
{
    $value=$_POST['value'];
    $id=$_POST['id'];
    mysqli_query($conexao,"UPDATE cadastro SET adm ='$value' WHERE id=$id");
    echo "<h2>You have Chosen the button status as:" .$value."</h2>";
}
?>