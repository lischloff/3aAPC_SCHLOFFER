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
// Werte für die Variablen setzen
$last = 0;
$kosten = 0;
$liter1 = 0;
$liter2 = 0;
$preis = 0;
$ausgabe = "";

//Prüfen, ob das Formular abgeschickt wurde
if (isset($_REQUEST["submit"])) {

  //Eingabe aus dem Formular in Zahlen umwandeln
    $liter1 = (float)($_REQUEST["liter1"]);
    $liter2 = (float)($_REQUEST["liter2"]);
    $preis = (float)($_REQUEST["preis"]);

    // Kosten berechnen: Summe der Liter multipliziert mit dem Preis
    $kosten = ($liter1 + $liter2) * $preis;

    // Ergebnis-String zusammensetzen
    $ausgabe = "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter " . $kosten . " €";
}
?>

<!-- Formular für die Eingaben -->
<form action="" method="post">

  <label for="liter1">Liter 1:</label><br>
  <input type="text" id="liter1" name="liter1" value="<?=$liter1?>"><br>
  
  <label for="liter2">Liter 2:</label><br>
  <input type="text" id="liter2" name="liter2" value="<?=$liter2?>"><br>
  
  <label for="preis">Preis pro Liter (€):</label><br>
  <input type="text" id="preis" name="preis" value="<?=$preis?>"><br><br>

  <input type="submit" name="submit" value="Berechnen"><br><br>

  <!-- Ergebnis anzeigen, falls voranden -->
  <?php if($ausgabe != ""): ?>
      <b><?=$ausgabe?></b>
  <?php endif; ?>
</form>

</body>

</html>