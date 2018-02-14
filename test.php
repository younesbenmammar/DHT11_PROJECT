<?php

use dao\MesureDao;



include 'config/autoload.inc.php';

?>

<?php

$config = include 'config/config.inc.php';


$mesureDao = new MesureDao($config);
$mesure1 = new Mesure(null, 10, 45);
$mesureDao->insertMesure($mesure1);




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








<h1>Crée</h1>


</body>
</html>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


