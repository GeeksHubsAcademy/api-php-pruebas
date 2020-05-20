<?php
require_once('./config/pdo.php');
require_once('./models/Product.php');
// $a=3;
// $b=4;
// $suma = fn() => $GLOBALS['a'] + $GLOBALS['b'];//requerido >=7.4 versión PHP
// echo $suma();
try {
    if ($_SERVER["REQUEST_METHOD"] === 'GET') {
        $name = $_GET['name'];
        Product::getProductByName($pdo, $name);
    } elseif ($_SERVER["REQUEST_METHOD"] === 'POST') {
        Product::create($pdo, $_POST);
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}