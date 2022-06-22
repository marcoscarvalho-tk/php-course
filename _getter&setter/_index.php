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
            <h2><p>GETTERS & SETTERS</p></h2>
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
                
                //função para "pegar" a variavel.
                public function getTitulo(){
                   return $this->titulo;
                }

                //função para alterar a variavel do Get.
                public function setTitulo($t){
                    if(is_string($t)){
                        $this->titulo = $t;
                    }
                }
            }
            //envio da string armazenada na variavel dentro da função setTitulo
            //retorno da variavel recebida dentro da função getTitulo. 
            $title = "Um título válido!";
            $post = new Post();
            $post->setTitulo($title);
            $newtitle = $post->getTitulo();
            
            echo "Título: ".$newtitle;
           
        ?>  
        </section>
        <footer>
            <p>&copy;B7Web</p>  
        </footer>      
    </div>   
    
</body>
</html>