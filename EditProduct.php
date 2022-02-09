<?php
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

if(isset($_GET["id"])&& !empty($_GET["id"]) ) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $date_created = $_GET["date_created"];
    $regular_price = $_GET["regular_price"];
    $description = $_GET["description"];
}
if(isset( $_POST['name'])&&isset( $_POST['regular_price']) && $_POST['description']  )
{
    $data = [
        'name' => $_POST['name'],

        'regular_price' => $_POST['regular_price'],
        'description' => $_POST['description']

    ];
    $product=$woocommerce->put('products/'.$id, $data);
    header('Location: listProducts.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit </title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<main class="container">
    <div class="row">
        <section class="col-12">
            <h1>Editer un produit</h1>
            <form method="post">
                <div class="form-group">
                    <label for="produit">Produit</label>
                    <input type="text" id="produit" name="produit" value="<?= $id ?>" readonly="true"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="<?= $description ?>"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" value="<?= $name ?>"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="regular_price">Prix</label>
                    <input type="text" id="regular_price" name="regular_price" value="<?= $regular_price ?>"
                           class="form-control">
                </div>


                <button class="btn btn-primary">
                    Envoyer
                </button>
            </form>
        </section>
    </div>
    <a href="listProducts.php" class="btn btn-success">Retour</a>
</main>
</body>
</html>

