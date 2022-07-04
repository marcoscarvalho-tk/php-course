<?php
$image = "images/01.png";
$mini_image = "images/ecommercelogo.png";

//função getimagesize()para extrair as dimensõe 
//e list() para armazenar em variaveis
list($width_orig, $height_orig) = getimagesize($image);
list($width_mini, $height_mini) = getimagesize($mini_image);

//função para estabelecer as dimensões da $image_final
$image_final = imagecreatetruecolor($width_orig, $height_orig);
//$mini_image_final = imagecreatetruecolor ($width_new, $height_new);
#### OBS: NÃO É NECESSÁRIO UTILIZAR imagecreatetruecolor para as
#### dimensoes de $mini_image, pois a $image_final estará 
#### nas dimensões da $image. Caso queira redimesniona-la, use um editor,
### a não ser que queira redimesiona-la dinamicamente (não recomendado)

//função para criar uma cópia das imagens originais
$bg_image = imagecreatefrompng($image);
$lay_image = imagecreatefrompng($mini_image);


 //função para receber a copia da imagem
 // alterar as dimensoes e posições da $image_final
imagecopy($image_final, $bg_image, 0, 0, 0, 0,
$width_orig, $height_orig); 

//função para acrescentar a copia da nova camada
//e alterar a posição da $lay_image na $image_final
## OBS: não foi possível manter a trasparencia 
//no redimensionamento da $lay_image.       
imagecopy($image_final, $lay_image, 0, 0, 0, 0, 
$width_mini, $height_mini);

//função para informar ao navegador 
//que o arquivo se trata de uma imagem.
header("Content-Type: image/png");

imagepng($image_final, null);

?>
