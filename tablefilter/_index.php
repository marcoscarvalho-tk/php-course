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
    <p><strong> Filttos em tabela</strong><br/></p>
        <h1><strong></strong></h1>
        <?php
         try{
                $pdo = new PDO("mysql:dbname=test;host=localhost","root","");
            }catch(PDOEXception $e){
                echo "ERRO: ".$e->getMessage();
            }
             
            if(isset($_GET['sexo'])){
                $sexo = $_GET['sexo'];

                $sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
                $sql = $pdo->prepare($sql);
                $sql->bindValue(":sexo", $sexo);
                $sql->execute();
            
            }else{
                $sexo = '';
                $sql = "SELECT * FROM usuarios";
                $sql = $pdo->prepare($sql);
                $sql->execute();

            }
           
        ?>
        <div class="form-inline">
        <form method="GET">          
            <select class="form-control" name="sexo">
                <option value=""></option>
                <option value="0"<?php echo ($sexo=='0') ?' selected':''; ?>>Masculino</option>
                <option value="1"<?php echo ($sexo=='1') ?' selected':''; ?>>Feminino</option>            
            </select>
            <input class="btn btn-primary ml-1" type="submit" value="Filtrar">           
        </form> 
        </div>
        
        
        <table class="table stripped-table">
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Idade</th>
            </tr>
            <?php
            
            $sexos = array(
                '0' =>'Masculino',
                '1' =>'Feminino'
            ); 
           
            if($sql->rowCount() > 0):
                foreach($sql->fetchAll() as $item): ?>              
                <tr>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $sexos[$item['sexo']] ; ?></td>
                    <td><?php echo $item['idade']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </table>

    </section>       
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
 
</body>
</html>


<?php 


?>