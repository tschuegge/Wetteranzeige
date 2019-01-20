<?php
$wetterdatenJson = file_get_contents("https://api.apixu.com/v1/current.json?key=3f17bee801b54469a8f133144191901&lang=de&q=Buchs");
$wetterdaten = json_decode($wetterdatenJson);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wetteranzeige Minimal-Variante (serverseitig)</title>
</head>
<body>
  <h1>Aktuelles Wetter in Buchs</h1>
  <p><?php echo $wetterdaten->current->condition->text ?> bei <?php echo $wetterdaten->current->temp_c ?>°C</p>
</body>
</html>