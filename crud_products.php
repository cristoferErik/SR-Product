<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/class_product.php';

use Automattic\WooCommerce\Client;

$consumer_key = 'ck_e3bc50aee8f6b3fb83e5b3aedf1b428546fc972a';
$consumer_secret = 'cs_88438a3a673e9c58daedcd784b9b1749cca6f3bf';
$url = "https://accessoriportoni.express/";
$options = ['version' => 'wc/v3'];

$woocommerce = new Client($url, $consumer_key, $consumer_secret, $options);

//array per enviare al index
$products_readable = [];

$products_readable = get_product($woocommerce);



function get_product($woocommerce)
{
    $endpoint = 'products';
    $parameters = [
        'type' => 'simple',
        'per_page' => 5
    ];
    //get
    $products = $woocommerce->get($endpoint, $parameters);

    $products_readable = [];
    
    foreach ($products as $key => $product) {
        $producto = new product();

        //lo convertiamo in un array
        $detail_product = (array)$product;

        $producto->setId($detail_product['id']);
        $producto->setName($detail_product['name']);
        $producto->setType($detail_product['type']);
        $producto->setRegularPrice($detail_product['regular_price']);
        $producto->setDescription($detail_product['description']);
        $producto->setShortDescription($detail_product['short_description']);
        $producto->setCategories($detail_product['categories']);
        $producto->setImages($detail_product['images']); //in dubbio

        array_push($products_readable, $producto);
    }
    return $products_readable;
}
/*
$producto->setId($detail_product['id']);
$producto->setName($detail_product['name']);
$producto->setType($detail_product['type']);
$producto->setRegularPrice($detail_product['regular_price']);
$producto->setDescription($detail_product['description']);
$producto->setShortDescription($detail_product['short_description']);
$producto->setCategories($detail_product['categories']);
$producto->setImages($detail_product['images']);//in dubbio

*/
/* 
$products_intestazioni=array_keys($products);
    foreach ($products as $key => $product) {
        //Facciamo la converzione a un array
        //var_dump((array)$products[0]);
        echo '<pre>';
        //id del prodotto generale
        var_dump($key);
        echo '</pre>';
        foreach ((array)$product as $key2 => $detail_product) {
            echo '<pre>';
            var_dump($key2);
            //Detaglio del nostro prodotto .. id(scritto per l'utente),nome,ecc..
            //var_dump($detail_product);
            echo '</pre>';
        }
    } 
*/


//to check in console
/*
echo '<pre>';
var_dump($key);
var_dump($product);
echo '</pre>';
*/