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
       
        <p><strong>Erro de header already sent</strong></p>
        <form method="POST">
            Digite a palavra "password":<br/><br/>
            <input type="text" name="acesso"/><br/><br/>

            <input type="submit" value="Enviar"/>

        </form>
        <?php
           if(!empty($_POST['acesso'])){
               $codigo = $_POST['acesso'];
               if($codigo == 'password'){
               
                //ATENÇAO!! é imprtante localizar a funçao reader()antes de qualquer envio
                //no exemplo abaixo retirando-se o comentario // o erro poderá ser notado
                //caso o erro permaneça verifique o encode UTF-8
                //echo "Isso causa o erro!";  
                //str_replace();
                header("Location: testpage.php");
               
                }else{
                   echo "Acesso negado!";
               }
           } 
        ?>
    <p></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>
