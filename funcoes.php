<?php
function ola(){    
   echo "<h2>Testando novas funções.</h2>"; 
}
echo "<h2>Olá mundo!</h2>";

function mostraValor(&$x){
    echo "Acabei de receber o valor $x<br/>";
    $x += 10; 
    return $x;
}
?>