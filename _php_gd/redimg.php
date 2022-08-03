<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Curso PHP</h1>

    </header>
    <section>
    <?php
        $file = isset($_FILES["arquivo"])? $_FILES['arquivo'] : '';

        //print_r($file);//impressao para verificarção dos dados do aquivo

        if(isset($file['tmp_name']) && empty($file['tmp_name']) == false){
            
            //renomeia o arquivo para que se possa inserir novamente uma imagem e não substitui-la
            //a variavel recebe um valor referenter ao time criptografa e acrescenta um valor randomico
            $newname = md5(time().rand(0,99)).'.jpg';
        
            //funçao para copiar o aquivo para o diretorio especificado 
            //move_uploaded_file($variavel['nome_temporario'], 'diretorio/destino/'.$novo_nome ou $var['name'])
            move_uploaded_file($file['tmp_name'], 'images/'.$newname);
            $newpath = 'images/'.$newname;
            //echo "Arquivo enviado com sucesso!<br/>";
            //echo '<img src="'.$newpath.'">';

            require 'redimg.class.php';
            $r = new Redimage();
            $newfile = $r->getImage($newpath, $newname);
            echo ' <p><strong> Redimensinandor de Imagens JPG</strong></p>';
            list($largura, $altura) = getimagesize('red_images/'.$newname);
            echo "Largura: ".$largura."px Altura: ".$altura."px <br/>";            
            echo "O PATH da imagem redimensionada é: red_images/".$newname;
            echo "<br/>";
            echo '<br/><img src="red_images/'.$newname.'">';
        }else{
            header("Location: _index.php");
        }
?>     
    <p></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>
