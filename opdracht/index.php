<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
  <header>
    <?php include 'includes/menu.php';?>
<?php 
function getInput()
  {$input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
  echo $input;
  }

  if($input == "true"){
    echo "Boolean";
  }
?>
  </header>
    <form action="index.php" method="get"><!-- dit laten staan! -->

    <p>Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <P>Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->
    <p>Het datatype van de waarde: <?php getInput(); ?> </p>

    </form><!-- dit laten staan! -->

  </body>
 <footer>  <?php include 'includes/footer.php';?></footer>
</html>