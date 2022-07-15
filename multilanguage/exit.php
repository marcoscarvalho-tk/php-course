<?php
session_start();

unset($_SESSION['lang']);
header("Location: _index.php");
?>