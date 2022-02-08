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

//Lister Tous les produits:
//echo 'Lister tous les produits :';
//$products= $woocommerce->get('products');
//echo '<pre>';
//print_r($products);
//echo '</pre>';

//Obtenir un seul produit
//echo 'Obtenir un seul produit :';
//$product=$woocommerce->get('products/14');
//echo '<pre>';
//print_r($product);
//echo '</pre>';


//Mise à jour d'un produit :
//$data = [
//    'regular_price' => '12000.54'
//];
//echo 'Produit apres la mise à jour :';
//$product=$woocommerce->put('products/14', $data);
//echo '<pre>';
//print_r($product);
//echo '</pre>';
//
//print_r($woocommerce->get('products/categories'));
//die;



////Créer un produit :
//echo 'Liste des produits apres l\'ajout d\'un produit :';
//$data = [
//    'name' => 'telephone portable',
//    'type' => 'simple',
//    'regular_price' => '6000',
//    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
//    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
//    'categories' => [
//        [
//            'id' => 17
//        ]
//    ],
//    'images' => [
//        [
//            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'        ]
//    ]
//];
//$res=$woocommerce->post('products',$data);
//echo '<pre>';
//print_r($res);
//echo '</pre>';

//Suppression d'un produit:
echo 'Produits apres la suppresion \n';
//print_r($woocommerce->delete('products/14', ['force' => true]));

$products= $woocommerce->get('products');
echo '<pre>';
print_r($products);
echo '</pre>';

?>

<?php //print_r($woocommerce->get('products')); ?>
