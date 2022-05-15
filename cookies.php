<?php
session_start();
//a função sessio_start deve ser executada antes mais nada
 //setcookie("meuteste", "usuario", time()+3600);
 //na função setcookie poderá conter o tempo de sua validade em segundos

  echo "Meu cookie é de:".$_COOKIE["meuteste"];
  //OBS: um cookie pode ser armazenado por php ou javascript
 // o cookie fica armazenada no navegador do usuário.
 ?>