<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    
</head> 
<body>
    <div class="container">
        <header>
        <h1>Curso PHP</h1>
        </header>
        <section>
            <h1>Orientação a Objetos</h1>
        <?php
            // Orientação ao objeto feita pela criação de uma classe (objeto) Cachorro.
            // este processo pode (deve) ser feita em uma pg separada.
            // para acessar a mesma basta fazer um 'require' com o nome da pg
            class Cachorro{
                public function latir($au){
                    if($au === true){
                        $late = "Au au au...";
                        return $late;
                    }elseif($au === false){
                        $late = "Silêncio...";
                        return $late;                    
                    }else{
                         $late = "miau";
                        return $late;  
                    }
                   
                }
            }
            //metodo para chamada da função na classe cachorro;
            // com a ação da função latir
            //permite istanciar diferentes variaveis.
            $lulu = new Cachorro();
            $au = true;
            $return = $lulu->latir($au);
            echo "Lulu late assim: ".$return;

            //variaveis diferentes utilizando a mesma função
            $dudu = new Cachorro();
            $au = true;
            $return = $dudu->latir($au);
            echo "<br/>Dudu late assim: ".$return;
            
            $bilu = new Cachorro();
            $au = false;
            $return = $bilu->latir($au);
            echo "<br/>Bilu late assim: ".$return;

            //esta é uma forma de acionar a classe sem instanciar
            $au = 'miau';
            echo "<br/>Que cachorro é este?<br/>";
            echo Cachorro::latir($au);
            echo "? Acho que não é cachorro...";
        ?>  
        </section>
        <footer>
            <p>&copy;</p>  
        </footer>      
    </div>   
    
</body>
</html>