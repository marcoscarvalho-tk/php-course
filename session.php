<?php
session_start();
//uma sessão permanecerá ativa enquanto o navegador estiver aberto o por tempo.
//pimeiro executa-se esta função para armazenar a informação desejada da sessão
//$_SESSION["teste"] ="Marcos";
//para buscar a informação armazenada e mostra-la basta executa-la novamente
echo "Meu nome é:".$_SESSION["teste"];

//OBS: Sessão só é possível ser armazenada com php ou uma linguagem server-side.
//porém Cookies podem ser armazenados com php e javascript; 
?>
