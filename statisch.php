<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP_Aufgabe1_SCHLOFFER</title>
</head>

<body>
  <h1>1.Übung</h1>
  <?php

  //Erstellung der Variablen
   $liter1 = 40.5;
   $liter2 = 35.7;
   $preis = 1.499;

  //Berechnung der Kosten, Preis mal Liter
  $kosten1 = $liter1 * $preis;
  $kosten2 = $liter2 * $preis;

  //Berechnung der gesamten Liter und des gesamten Preises
  $gesamtLiter = $liter1 + $liter2;
  $gesamtKosten = $kosten1 + $kosten2;

//String-Verkettung
$ausgabe = "Die Benzinkosten betragen für " . $gesamtLiter . " Liter " . $gesamtKosten . " €";
echo $ausgabe;

?>

</body>
</html>