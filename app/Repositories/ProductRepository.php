<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositorInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositorInterface
{
    /**
     * Create a new class instance.
     */
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::find($id);
    }
    public function createProduct($data)
    {
        return Product::create($data);
    }
    public function updateProduct($id, $data)
    {
        return Product::find($id)->update($data);
    }
    public function deleteProduct($id)
    {
        return Product::find($id)->delete();
    }
}
