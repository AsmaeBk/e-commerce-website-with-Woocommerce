<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress/',
    'ck_d4aefbd847d6bc8df5ededb1cbe793d75be35c46',
    'cs_efc79e910a67ada28a0244f58ee3d6fd89caaae0',
    [
        'version' => 'wc/v3',
    ]
);
//echo 'Obtenir un seul produit :';
if(isset($_GET["id"])&& !empty($_GET["id"]) &&$_GET["last_name"]&&$_GET["first_name"]&&$_GET["email"]&&$_GET["role"]&&$_GET["date_created"]&&$_GET["username"])
{


    $id = $_GET["id"];
    $nom=$_GET["last_name"];
    $prenom=$_GET["first_name"];
    $email=$_GET["email"];
    $role=$_GET["role"];
    $date_created=$_GET["date_created"];
    $username=$_GET["username"];


}




?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des produits </title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<main class="container">
    <div class="row">
        <section class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Détails du client <?= $nom?></h1>
                </div>





                <div class="card-body">
                    <p><label style="font-weight: 500" > ID :</label>  <?= $id?></p>
                    <p><label style="font-weight: 500" >Nom :</label> <?= $nom?></p>
                    <p><label style="font-weight: 500" >Prenom :</label>  <?= $prenom?></p>
                    <p><label style="font-weight: 500" >Email:</label>  <?= $email?></p>
                    <p><label style="font-weight: 500" > Role : </label> <?=  $role?></p>
                    <p><label style="font-weight: 500" > Data d'integration : </label> <?=  $date_created?></p>

            <p><label style="font-weight: 500" > Nom d'utilisateur : </label> <?=  $username?></p></div>
    </div>

                <p><a href="listClients.php" class="btn btn-success">Retour</a>


                    <a href="EditProduct.php?id=<?= $id ?>&&last_name=<?= $nom ?>&&first_name=<?= $prenom ?>&&email=<?= $email ?>&&date_created=<?= $date_created ?>&&username=<?= $username ?>" class="btn btn-info">Modifier</a></p>
        </section>
    </div>

</main>
</body>
</html>
