<?php
session_start();

use dao\MesureDao;
use Mesure;
include 'config/autoload.inc.php';
?>
<?php
$config = include 'config/config.inc.php';
$mesuredao = new MesureDao($config);
$mesure = $mesuredao->findAllMesures();
$erreur = '';

if ($mesure == NULL){
    $erreur = 'Aucun contact';
}




?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Younes</title>
    <link rel="stylesheet" href="styles/style.css">
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>
<body>


<div class="btn-toolbar">

    <div align="center">

        <a href="addContactController.php"> <button class="btn btn-primary"> Nouveau Contact </button></a>

    </div>
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Temperature</th>
                <th>Humidite</th>
                <th style="width: 36px;"></th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($mesures as $mesure) {
            ?>
            <tr>
                <th scope="row"><?php echo $mesure->id ?></th>
                <td><?php echo $mesure->datetime ?></td>
                <td><?php echo $mesure->temperature ?></td>
                <td><?php echo $mesure->humidite ?></td>
                <td><a href="deleteContactController.php?id=<?php echo $contact->id ?>"><span class="glyphicon glyphicon-trash text-black"></span></a></td>
                <td><a href="editContactController.php?id=<?php echo $contact->id ?>"><span class="glyphicon glyphicon-pencil text-black"></span></a></td>


                <?php
                }

                ?>

            </tr>

            </tbody>



        </table>

    </div>

</div>


</body>
<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>

<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</html>
