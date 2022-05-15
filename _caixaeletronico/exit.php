<?php
//finaliza a sessao
session_start();

unset($_SESSION['banco']);
header("Location: _index.php");
?>