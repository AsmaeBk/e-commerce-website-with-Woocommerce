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

if(isset($_GET["id"])&& !empty($_GET["id"]) &&$_GET["last_name"]&&$_GET["first_name"]&&$_GET["email"]&&$_GET["role"]&&$_GET["date_created"]&&$_GET["username"]) {
    $id = $_GET["id"];
    $nom = $_GET["last_name"];
    $prenom = $_GET["first_name"];
    $email = $_GET["email"];
    $role = $_GET["role"];
    $date_created = $_GET["date_created"];
    $username = $_GET["username"];
}
if(isset($_POST["email"])&&isset($_POST["prenom"])&&isset($_POST["nom"])&&isset($_POST["username"]))
{


    $data = [
        'email' => $_POST['email'],
        'first_name' => $_POST['prenom'],
        'last_name' => $_POST['nom'],
        'username' => $_POST['username'],


    ];
    $id = $_GET["id"];
    $product=$woocommerce->put('customers/'.$id, $data);
 header('Location: listClients.php');
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
            <h1>Ajouter un client</h1>
            <form method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" value="<?=$username?>" class="form-control" readonly="true">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="<?=$nom?>" >
                </div>


                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" id="prenom" name="prenom" value="<?=$prenom?>"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?=$email?>" >
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

