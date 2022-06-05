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
            <h2><p>Abstração de Classes</p></h2>
        <?php
            // Orientação ao objeto feita pela criação de uma classe (objeto).
            // este processo pode/deve ser feita em uma pg separada.
            // para acessar a mesma basta fazer um 'require' com o nome da pg
            
            # o conceito de abstração visa introduzir o uso de uma função/metodo comum.
            # ou seja, uma classe "cavalo" executa uma função de uma classe "animal" por ex. 
            # sendo assim cada classe herda e executa a função da classe "Animal"
           
            abstract class Animal{
               public $nome;
               public $idade;
                // não se abre o bloco desta função dentro desta classe.
                // pode-se receber parametros aqui
               abstract protected function andar();
            }
            class Cavalo extends Animal{
                private $quantidade_de_patas;
                private $tipo_de_pelo;
                
                // aqui sim, abre-se o bloco da função
                public function andar(){
                    return "anda";
                }
            }
            $cavalo = new Cavalo();
            $anda = $cavalo->andar();
            echo "Meu cavalo ".$anda;
        ?>  
        </section>
        <footer>
            <p>&copy;</p>  
        </footer>      
    </div>   
    
</body>
</html>