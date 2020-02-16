<?php
$wetterdatenJson = file_get_contents("https://api.openweathermap.org/data/2.5/weather?appid=3d37b0aa0b8e383968a3a8243d954202&lang=de&units=metric&q=Buchs");
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
  <p><?php echo $wetterdaten->weather[0]->description ?> bei <?php echo $wetterdaten->main->temp ?>°C</p>
</body>
</html>