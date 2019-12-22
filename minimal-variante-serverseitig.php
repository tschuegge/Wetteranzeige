<?php
$wetterdatenJson = file_get_contents("http://api.weatherstack.com/current?access_key=7063f90987c7df61318bc66e974d74ea&query=Buchs");
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
  <p><?php echo $wetterdaten->current->weather_descriptions[0] ?> bei <?php echo $wetterdaten->current->temperature ?>°C</p>
</body>
</html>