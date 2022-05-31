<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>   
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <div class ="container">
     <header>
        <h1>Curso PHP</h1>

    </header>
    <section>
        <p><strong>CAPTCHA</strong><br/></p>
        <?php
        session_start();
        if(!isset($_SESSION['captcha'])){
            $n = rand(1000, 9999);
            $_SESSION['captcha'] = $n;
        }

        if(!empty($_POST['codigo'])){
            $c = $_POST['codigo'];

            if($c == $_SESSION['captcha']){
                echo "Código Certo!";
            }else{
                echo "Código Errado!";
            }
            $n = rand(1000, 9999);
            $_SESSION['captcha'] = $n;
        }
        
        ?>
        <h1><strong></strong></h1>
        <img src="imagem.php" width="150" height="75" alt="imagem">
        <form method="POST">
            <div class="form-group w-50 mx-auto">
                <label for="codigo">Captcha:</label>
                <input type="text" name="codigo" class="form-control">
            </div>
            <input type="submit" value="Verificar" class="btn btn-primary">
        </form>
             
      
    </section>       
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
 
</body>
</html>


<?php 


?>
