<?php
$file = $_FILES["arquivo"];

print_r($file);//impressao para verificarção dos dados do aquivo

if(isset($file['tmp_name']) && empty($file['tmp_name']) == false){
    
    //renomeia o arquivo para que se possa inserir novamente uma imagem e não substitui-la
    //a variavel recebe um valor referenter ao time criptografa e acrescenta um valor randomico
    $newname = md5(time().rand(0,99)).'.png';
   
    //funçao para copiar o aquivo para o diretorio especificado 
    //move_uploaded_file($variavel['nome_temporario'], 'diretorio/destino/'.$novo_nome ou $var['name'])
    move_uploaded_file($file['tmp_name'], 'images/'.$newname);
    echo "Arquivo enviado com sucesso!";

}
?>