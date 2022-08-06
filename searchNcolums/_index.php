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
        <p><strong> Pesquisa em várias colunas</strong><br/></p>
        <h1><strong></strong></h1>
        <form method="GET" class="w-50 mx-auto">
                <div class="form-group">               
                    <label for="campo">Digite o Email ou CPF</label>
                    <input type="text" name="campo" class="form-control text-center">                
                </div>
                <input type="submit" value="Pesquisar" class="btn btn-success">
        </form>
        <hr/>

        <?php
        if(!empty($_GET['campo'])){
            $campo = $_GET['campo'];

            try{
                $pdo = new PDO ("mysql:dbname=test;host=localhost","root","");
            }catch(PDOEXception $e){
                echo "ERRO: ".$e->getMessage();
                
                exit;
            }
            $sql = "SELECT * FROM usuarios WHERE email = :email OR cpf = :cpf";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":email", $campo);
            $sql->bindValue(":cpf", $campo);
            $sql->execute();

            if($sql->rowCount() > 0){
                $sql = $sql->fetch();

                echo "NOME: $sql[nome]";

            }

        }
        
        ?>
        
    </section>       
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
 
</body>
</html>


<?php 


?>