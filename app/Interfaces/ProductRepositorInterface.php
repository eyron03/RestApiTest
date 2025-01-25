<?php

namespace App\Interfaces;

interface ProductRepositorInterface
{
    //
    public function getAllProducts();

    public function getProductById($id);

    public function createProduct($data);

    public function updateProduct($id, $data);

    public function deleteProduct($id);
}
