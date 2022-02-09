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
//Créer un produit :
if(isset($_POST['name'])&& isset($_POST['regular_price']) && isset($_POST['description']) )
{$data = [
    'name' => $_POST['name'],
    'type' => 'simple',
    'regular_price' => $_POST['regular_price'],
    'description' => $_POST['description'],
    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
    'categories' => [
        [
            'id' => 17
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'        ]
    ]
];
$res=$woocommerce->post('products',$data);
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
    <!---->
    <!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>-->
</head>
<body>

<main class="container">
    <div class="row">
        <section class="col-12">
  <h1>Ajouter un produit</h1>
            <form method="post">

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description"
                    class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="regular_price">Prix</label>
                    <input type="text" id="regular_price" name="regular_price" class="form-control">
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
