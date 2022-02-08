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
$data = file_get_contents('http://localhost/woo/product.php');
$data = json_decode($data, true);
?>
<div>
    <br><br>
    <center>
        <h3>Produits Woocommerce</h3>
    </center>
    <br><br>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>name</th>
                <th>Date</th>
                <th>prix</th>
                <th>prix(promotion) </th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ( $data as $row ) : ?>
                <tr>
                    <td><?= $i; ?></td>

                    <td><?= $row['id']; ?></td>
                    <td>     <?= $row['name']; ?>

                    </td>
                    <td><?= $row['date_created']; ?></td>
                    <td><?= $row['regular_price']; ?></td>
                    <td><?= $row['sale_price']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>