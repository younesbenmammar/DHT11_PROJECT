<?php

use dao\MesureDao;



include 'config/autoload.inc.php';

?>

<?php

$config = include 'config/config.inc.php';


$mesureDao = new MesureDao($config);

$temperature = "";
$humidite = "";
$erreur = "";
if (!empty($_POST)) {

    $temperature = $_POST["temperature"];
    $humidite = $_POST["humidite"];

    $mesure = new Mesure(null, $temperature, $humidite);
    $mesureDao->insertUser($mesure);


}

?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>DHT11</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<form action="addMesure.php" method="post">

    <div class="form-group">
        <label for="temperature">Temperature</label>
        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="Entrer la Temperature">
    </div>
    <div class="form-group">
        <label for="humidite">Humidite</label>
        <input type="text" class="form-control" id="humidite" name="humidite" placeholder="Entrer l'humidite">
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>


</form>












<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</body>
</html>