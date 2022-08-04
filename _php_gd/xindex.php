<?php
 $arquivo = "imagem.jpg";
 //width maximo e height maximo da imagem_final desejada
 $largura = 500;
 $altura = 500;

 //a funçao list() armazena os valores da dimensao da imagem obtidos pela função getimagesize()
 list($largura_original, $altura_original) = getimagesize($arquivo);

 //o ratio é uma variavel que informa a média da dimansão da imagem original
 $ratio = $largura_original / $altura_original;



 //esta condição redimensiona de acordo com a maxima altura
 if($largura / $altura > $ratio){
     $largura = $altura * $ratio;
 //esta condição redimensiona de acordo com a maxima largura
 }else{
     $altura = $largura / $ratio;
 }

 //esta variavel armazena a função imagecreatetruecolor() 
 //que passa como parametro largura e altura atualizada
 $imagem_final = imagecreatetruecolor($largura, $altura);

 //esta variavel armazena a função imagecratefrom(jpeg/jpg)
 //que passa como parametro a imagem original
 $imagem_original = imagecreatefromjpeg($arquivo);

 //esta função faz o redimensionamento de acordo com os parametros
 //primeiro parametro: imagem final
 //segundo parametro: imagem original
 //terceiro parametro: eixo x da img final (0 marca o inicio: canto esq.sup.)
 //quarto  parametro: eixo y da img final
 //quinto parametro: eixo x da img original
 //sexto parametro: eixo y da img original
 //setimo parametro: $lagrura (atualizada)
 //oitavo parametro: $altura (atualizada)
 //nono parametro: $largura_original
 //decimo parametro: $altura_original
 imagecopyresampled($imagem_final, $imagem_original, 
 0, 0, 0, 0,
 $largura, $altura, $largura_original, $altura_original);

 //função para o PHP informar ao navegador que o arquivo é uma imagem
 header("Content-Type: image/jpeg");

 //função para exibir a imagem atualizada e redimensionada
 //o segundo parametro informa o diretorio para armazenamento entre ""
 //o terceiro parametro(jpeg somente)informa a qualidade da imagem normalmetne 80
 imagejpeg($imagem_final, null, 80);

?>
