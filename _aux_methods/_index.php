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
            <h2><p>Métodos Auxiliares</p></h2>
        <?php
            // Orientação ao objeto feita pela criação de uma classe (objeto).
            // este processo pode/deve ser feita em uma pg separada.
            // para acessar a mesma basta fazer um 'require' com o nome da pg
            class Post{
                //as variaveis private só poderam ser alteradas 
                //ou acessadas dentro da função
                // para altera-las é necessario usar os metodos 
                // GETTERS E SETTERS
                // isso garante a segurança da mesma

                private $titulo;
                private $data;
                private $corpo;
                private $comentarios;
                private $qtComent;

                //métodos auxiliares são funções que executam internamente
                //ou seja dentro do objeto, deve ser private

                //esta funçao recebe e adiciona o comentario na variavel $comentarios
                //ao mesmo tempo que aciona a função qtComent para somar o comentario
                public function addComent($msg){
                    $this->comentarios[] = $msg;
                    $this->contComents();
                    
                }

                //esta função "pega" a variavel $comentarios para retornar o valor;
                public function getComents(){
                    return $this->comentarios;
                }

                //esta função "pega"  a variavel $qtComent para retornar o valor
                public function getQuantComents(){
                    return $this->qtComent;
                }

                //esta função soma o valor do array qtComent a cada novo comentario
                private function contComents(){
                    $this->qtComent = Count($this->comentarios);
                }
            }
            // os comentarios sao armazendadas em um array na var $comentarios
            $post = new Post();
            $post->addComent("Frase de Teste 0");
            $post->addComent("Frase de Teste 1");
            $post->addComent("Frase de Teste 2");
            $post->addComent("Frase de Teste 3");
            $quantcoments = $post->getQuantComents();
            $coments = $post->getComents();

            echo "<pre>Quantidade de comentarios: ".$quantcoments;
            echo "<br/>";
            print_r($coments);
            echo "</pre><br/>Comentarios: <br/>".implode("<br/>",$coments)
        ?>  
        </section>
        <footer>
            <p>&copy;B7Web</p>  
        </footer>      
    </div>   
    
</body>
</html>