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
    <p><strong>Sistema de Tags</strong></p>
    <?php
    try{
        $pdo = new PDO("mysql:dbname=tags;host=localhost","root","");
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }
    $sql = "SELECT caracteristicas FROM usuarios";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll();
        
        $carac = array();

        foreach($lista as $usuario){
            $palavras = explode(",", $usuario['caracteristicas']);
            foreach($palavras as $palavra) {
                $palavra = trim($palavra);

                if(isset($carac[$palavra])) {
                    $carac[$palavra] ++;
                }else{
                $carac[$palavra] = 1;
                }
            }
        }
        arsort($carac);
        $palavras = array_keys($carac);
        $contagens = array_values($carac);

        $maior = max($contagens);

        $tamanhos = array(11, 15, 20, 30);

        for($x=0;$x<count($palavras);$x++){
            $n = $contagens[$x] / $maior;

            $h = ceil($n * count($tamanhos));

            echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$x]."(".$contagens[$x].")</p>";
        }




    }
    ?>
   
   
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>