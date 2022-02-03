<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Curso PHP</h1>

    </header>
    <section>
        <p><strong> Estrutura Condicional</strong></p>
    <?php
      for($i = 1; $i <= 10; $i ++){
          echo " $i";
      }
      echo "<br/>";
      
      for($i = 10; $i >= 1; $i--){
          echo " $i";
      }
      echo "<br/>";
      
      for($i = 0; $i <= 50; $i += 5){
      echo " $i";
      }
      echo "<br/>";
      
      for($i = 20; $i >= 0; $i -= 2){
      print " $i";
      }
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>