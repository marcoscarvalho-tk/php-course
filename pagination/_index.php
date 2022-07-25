<?php
try{
$pdo = new PDO("mysql:dbname=test;host=localhost","root","");
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}

?>
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
</head>
<body>
    <div class ="container">
     <header>
        <h1>Curso PHP</h1>

    </header>
    <section>
      <p><strong>PAGINAÇÃO</strong></p>
      <?php

      //############### VIDE ##########################
      //OUTRO EXEMPLO ENCONTRA-SE EM:
      ///var/www/html/_geral/classificados/_index.php
      //###############################################
      
      // query para buscar o total de posts
      $total_posts = 0;
      $sql = "SELECT COUNT(*) as c FROM post";
      $sql = $pdo->query($sql);
      $sql = $sql->fetch();
      $total_posts = $sql['c']; 
      
      //Define o total de paginas
      //de acordo com o numero de posts por pagina
      //função ceil() arredonda para cima;
      $total_paginas = ceil($total_posts / 10); 
      
      //GET para enviar o numero da pagina
      //se for o primeiro acesso, nao entra no GET
      $pg = 1;
      
      if(isset($_GET['p']) && !empty($_GET['p'])){
          $pg = addslashes($_GET['p']);
      }

      //$p recebe o GET e multiplica pelo numero
      // de posts por pagina definido
      //$pgn recebe o valor de $pg para o pagination
      $p = ($pg - 1) * 10;
      $pgn = $pg;

      //$p e passado para a query que retorna
      //os posts do endereço intervalo de inicio
      //até o LIMIT definido (no caso, 10);
      $sql = "SELECT * FROM post LIMIT $p, 10";
      $sql = $pdo->query($sql);
      
      if($sql->rowCount() > 0) : ?> 
        <table class="table table-striped text-left">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Mensagem</th>
            </tr>
        <?php foreach($sql->fetchAll() as $item): ?>
        
            <tr>
                <th><?php echo $item['id']; ?></th>
                <td><?php echo $item['titulo']; ?></td>
                <td><?php echo $item['corpo']; ?></td>
            </tr>
       
      <?php endforeach; ?>   
      </table>
      <?php endif; ?>    
          
      
        <nav aria-label="Navegação de página exemplo">
        <ul class="pagination justify-content-center">

            <?php if($pg > 1):?>  
            <li class="page-item">  
            <a class="page-link" href="_index.php?p=<?php echo ($pg -1); ?>" aria-label="Anterior">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
            </a>
            </li>
            <?php endif; ?> 

                <?php for($a=0;$a<6;$a++,$pgn++) :?>
                    <?php if($pgn <= $total_paginas): ?>
                    <li class="page-item <?php echo $pgn == $pg? "active":''; ?> ">
                    <a class="page-link" href="_index.php?p=<?php echo $pgn; ?>"><?php echo $pgn; ?></a></li>
                    <?php endif; ?>                
                <?php endfor; ?>

             <?php if($pg < $total_paginas): ?>
            <li class="page-item">
            <a class="page-link" href="_index.php?p=<?php echo ($pg + 1); ?>" aria-label="Próximo">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Próximo</span>
            </a>
            </li>
            <?php endif; ?>
        </ul>
        </nav>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
   
    
</body>
</html>
