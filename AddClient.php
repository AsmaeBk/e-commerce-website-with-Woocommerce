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
if(isset($_POST['nom'])&& isset($_POST['prenom']) && isset($_POST['email'])&& isset($_POST['username']) )
{////Créer un seul client

$data = [
    'email' => $_POST['email'],
    'first_name' => $_POST['prenom'],
    'last_name' => $_POST['nom'],
    'username' => $_POST['username'],

    'password' => 'imad123',
    'billing' => [
        'first_name' => 'Imad',
        'last_name' => $_POST['nom'],
        'company' => '',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US',
        'email' => 'john.doe@example.com',
        'phone' => '(555) 555-5555'
    ],
    'shipping' => [
        'first_name' => 'Imad',
        'last_name' => $_POST['nom'],
        'company' => '',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US'
    ]
];
$response=$woocommerce->post('customers', $data);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un client </title>
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
            <h1>Ajouter un client</h1>
            <form method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control">
                </div>

                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" id="prenom" name="prenom"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>



                <button class="btn btn-primary">
                    Envoyer
                </button>
            </form>
        </section>
    </div>
    <a href="listClients.php" class="btn btn-success">Retour</a>
</main>
</body>
</html>
