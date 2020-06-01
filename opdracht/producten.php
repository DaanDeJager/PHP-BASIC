<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <?php include 'includes/menu.php';
    require 'includes/functions.php';
    ?>
  </head>
    <form action="producten.php" method="get"><!-- dit laten staan! -->
    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <?php 
$producten = array("Appels","Peren","Bananen","Ui","Prei","Bosui","Water","Cola","Mango","Aardappel");
$prijs = array(0.20,0.12,0.30,0.40,0.20,0.15,1.20,0.80,0.60,0.20);


echo "<tr>" . "<td>" . "0" . $producten[0] . "<td>" . $prijs[0];
echo "<tr>" . "<td>" . "1" . $producten[1] . "<td>" . $prijs[1];
echo "<tr>" . "<td>" . "2" . $producten[2] . "<td>" . $prijs[2];
echo "<tr>" . "<td>" . "3" . $producten[3] . "<td>" . $prijs[3];
echo "<tr>" . "<td>" . "4" . $producten[4] . "<td>" . $prijs[4];
echo "<tr>" . "<td>" . "5" . $producten[5] . "<td>" . $prijs[5];
echo "<tr>" . "<td>" . "6" . $producten[6] . "<td>" . $prijs[6];
echo "<tr>" . "<td>" . "7" . $producten[7] . "<td>" . $prijs[7];
echo "<tr>" . "<td>" . "8" . $producten[8] . "<td>" . $prijs[8];
echo "<tr>" . "<td>" . "9" . $producten[9] . "<td>" . $prijs[9];


?>  
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je:</p> <?php getTotaal() ?>
    <p>je bent <?php getAge(); ?> je korting is: </p> <?php getKorting(); ?>
    <div>
    </div>
    </form><!-- dit laten staan! -->
  </body>
      <footer>
      <?php include 'includes/footer.php';?>
    </footer>
</html>