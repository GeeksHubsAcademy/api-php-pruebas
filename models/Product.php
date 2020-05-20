<?php
class Product
{
    static public function getProductByName($pdo, $name)
    {
        $query = $pdo->prepare('SELECT * FROM products WHERE name = :name');
        $query->execute(['name' => $name]);
        return  $query->fetchAll();
    }
    static public function create($pdo, $product)
    {
        $query = $pdo->prepare('INSERT INTO products (id, name, price,CategoryId, cantidad,image_path)
        VALUES (null, :name, :price,:CategoryId, :cantidad,:image_path)');
        $query->execute($product);
        return  $query->fetchAll();
    }
}
