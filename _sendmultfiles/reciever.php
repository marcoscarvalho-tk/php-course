<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Curso PHP intermediário</h1>
</header>
    <section>
   
        <p><strong>Envio de arquivos multiplos</strong></p>
        <pre>
        <?php
        //print_r($_FILES);

        $file = $_FILES['arquivo'];
        $tmpname = $file['tmp_name'];
        $filename = $file['name'];
       
        if(isset($file) && count($file['tmp_name']) > 0){
            
            for($i = 0; $i < count($tmpname); $i++){
                   
                    //função para gerar nome aleatorio
                    //$nomedoarquivo = md5($tmpname[$i].time().rand(0,999)).'.jpg';
                    
                    //move o arquivo temporario para o diretorio no segundo argumento
                    move_uploaded_file($tmpname[$i], 'images/'.$filename[$i]);
                    
            }
             echo "Arquivos enviados come sucesso!";
        }else{
             echo "ERRO! Verifique se há arquivos inseridos";
        }
            
        
        ?>
        </pre>
   
    <p></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>