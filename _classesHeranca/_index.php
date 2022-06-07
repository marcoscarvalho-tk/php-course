<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>   
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    
</head> 
<body>
    <div class="container">
<header>
        <h1>Curso PHP</h1>
        </header>
        <section>
            <h1>Orientação a Objetos</h1>
            <h2><p>Herança de Classes</p></h2>
        <?php
            // Orientação ao objeto feita pela criação de uma classe (objeto).
            // este processo pode/deve ser feita em uma pg separada.
            // para acessar a mesma basta fazer um 'require' com o nome da pg
            
            # o conceito de herança visa adquirir as propriedades de uma classe "abrangente".
            # ou seja, uma classe "cavalo" herda propriedades de uma classe "animal" por ex. 
            # porém esta classe "Animal" não é comum, 
            # sendo assim cada classe herda uma nova classe "Animal"
            class Animal{
               public $nome;
               public $idade;
            }
            class Cavalo extends Animal{
                private $quantidade_de_patas;
                private $tipo_de_pelo;
            }
            class Gato extends Animal{
                private $quantidade_de_patas;
                private $miado;
            }

            $cavalo = new Cavalo();
            $cavalo->nome = "cavalo 1";
            $gato = new Gato();
            $gato->nome = "gato 1";

            echo "O nome do cavalo é: ".$cavalo->nome;
            echo "<br/>O nome do gato é: ".$gato->nome;
            
        ?>  
        </section>
        <footer>
            <p>&copy;B7Web</p>  
        </footer>      
    </div>   
    
</body>
</html>