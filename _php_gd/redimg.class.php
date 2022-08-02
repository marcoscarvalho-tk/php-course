<?php
    class Redimage{
        public function getImage($newpath, $newname){
                if(isset($newpath) && !empty($newpath)){
                $arquivo = $newpath;
               
                $largura = 450;
                $altura = 450;

                list($largura_original, $altura_original) = getimagesize($arquivo);
               
                $ratio = $largura_original / $altura_original;

                //esta condição redimensiona proporcionalmente com a maxima altura
                if($largura / $altura > $ratio){
                    $largura = $altura * $ratio;
                //esta condição redimensiona proporcionalmente com a maxima largura
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
                imagecopyresampled($imagem_final, $imagem_original, 
                0, 0, 0, 0,
                $largura, $altura, $largura_original, $altura_original);

                //função para o PHP informar ao navegador que o arquivo é uma imagem
                //header("Content-Type: image/png");

                //função para exibir a imagem atualizada e redimensionada
                //o segundo parametro informa o diretorio para armazenamento entre ""
                //o terceiro parametro(jpeg somente)informa a qualidade da imagem normalmetne 80
                imagejpeg($imagem_final, "red_images/".$newname, 80);
                
              
                
            }else{
                header("Location: _index.php");
            }
        }
        
    }

      ############# Mais informaçoes em: #############
      #  /var/www/html/cursophp02/_sendfiles  
      #  /var/www/html/cursophp02/_sendfiles/reciever.php      
      #  /var/www/html/_geral/classificados/editar-anuncio.php
      #  /var/www/html/_geral/classificados/classes/anuncios.class.php
      #  /var/www/html/cursophp03/_php_gd/xindex.php
?>
