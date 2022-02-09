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
//Suprrimer un client:
//$del=$woocommerce->delete('customers/6', ['force' => true]);
//if($del)
//{
//echo 'Le client est bien supprimé .';
//}

//$data = [
//    'first_name' => 'Amid',
//    'billing' => [
//        'first_name' => 'Amid'
//    ],
//    'shipping' => [
//        'first_name' => 'Amid'
//    ]
//];
//echo '<pre>';
//print_r($woocommerce->put('customers/6', $data));
//echo '</pre>';

//Liste des clients :
$customers=$woocommerce->get('customers');
echo '<pre>';
print_r($customers);
echo '</pre>';

////Créer un seul client
//
//$data = [
//    'email' => 'Imad.alaoui@example.com',
//    'first_name' => 'Imad',
//    'last_name' => 'Alaoui',
//    'username' => 'imad.ala',
//    'password' => 'imad123',
//    'billing' => [
//        'first_name' => 'Imad',
//        'last_name' => 'Alaoui',
//        'company' => '',
//        'address_1' => '969 Market',
//        'address_2' => '',
//        'city' => 'San Francisco',
//        'state' => 'CA',
//        'postcode' => '94103',
//        'country' => 'US',
//        'email' => 'john.doe@example.com',
//        'phone' => '(555) 555-5555'
//    ],
//    'shipping' => [
//        'first_name' => 'Imad',
//        'last_name' => 'Alaoui',
//        'company' => '',
//        'address_1' => '969 Market',
//        'address_2' => '',
//        'city' => 'San Francisco',
//        'state' => 'CA',
//        'postcode' => '94103',
//        'country' => 'US'
//    ]
//];
//$response=$woocommerce->post('customers', $data);
//echo '<pre>';
//print_r($response);
//echo '</pre>';





////Obtenir un seul client :
//$customers=$woocommerce->get('customers/4');
//echo '<pre>';
//print_r($customers);
//echo '</pre>';

?>