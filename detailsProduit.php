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
if(isset($_GET["id"])&& !empty($_GET["id"]) )
{
    $id = $_GET["id"];
    $name=$_GET["name"];
    $date_created=$_GET["date_created"];
$regular_price=$_GET["regular_price"];
$description=$_GET["description"];


}


echo $name;

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
   <h1>Détails du produit <?= $name?></h1>
        </div>
        <div class="card-body">
    <p><label style="font-weight: 500" > ID :</label>  <?= $id?></p>
            <p><label style="font-weight: 500" >Nom :</label> <?= $name?></p>
            <p><label style="font-weight: 500" >Date created :</label>  <?= $date_created?></p>
            <p><label style="font-weight: 500" >Prix:</label>  <?= $regular_price?></p>
            <p><label style="font-weight: 500" > Description : </label> <?=  $description?></p></div>

        <p><a href="listProducts.php" class="btn btn-success">Retour</a>
            <a href="EditProduct.php?id=<?= $id ?>&&name=<?= $name ?>&&regular_price=<?= $regular_price ?>&&description=<?= $description ?>&&date_created=<?= $date_created ?>" class="btn btn-info">Modifier</a></p>
</section>
    </div>

</main>
</body>
</html>
