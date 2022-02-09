<!DOCTYPE html>
<html>
<head>
    <title>Affichage des produits </title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
$data = file_get_contents('http://localhost/woo/client.php');
$data = json_decode($data, true);
?>
<div>
    <br><br>
    <center>
        <h3>Clietns Woocommerce</h3>
    </center>
    <br><br>
</div>
<div class="container">
    <div class="table-responsive">
        <a href="AddClient.php" class="btn btn-success">Ajouter un client</a>
        <table class="table table-hover">
            <?php
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                $_SESSION['erreur'] = "";
            }
            ?>
            <thead>
            <tr>
                <th>No</th>
                <th>Id</th>

                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Role</th>
                <th>Date d'intégration</th>


                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ( $data as $row ) : ?>
                <tr>
                    <td><?= $i; ?></td>

                    <td><?= $row['id']; ?></td>
                    <td>     <?= $row['last_name']; ?>

                    </td>
                    <td><?= $row['first_name']; ?></td>
                    <td><?= $row['email']; ?></td>

                    <td><?= $row['role']; ?></td>
                    <td><?= $row['date_created']; ?></td>

                    <td><a class="btn btn-info" href="detailsClient.php?id=<?= $row['id']?>&&last_name=<?= $row['last_name']?>&&first_name=<?= $row['first_name']?>&&email=<?= $row['email']?>&&role=<?= $row['role']?>&&date_created=<?= $row['date_created']?>">Voir</a>
                        <a class="btn btn-dark" href="editClient.php?id=<?= $row['id']?>&&last_name=<?= $row['last_name']?>&&first_name=<?= $row['first_name']?>&&email=<?= $row['email']?>&&role=<?= $row['role']?>&&date_created=<?= $row['date_created']?>">Modifier</a>
                        <a class="btn btn-danger" href="DeleteClient.php?id=<?= $row['id']?>">Supprimer</a></td>             </tr>

                <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

</body>
</html>