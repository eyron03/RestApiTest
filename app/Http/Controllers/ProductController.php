<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponsClass;
use App\Http\Resources\ProductResource;
use App\Interfaces\ProductRepositorInterface;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private ProductRepositorInterface $ProductRepositorInterface;

    public function __construct(ProductRepositorInterface $ProductRepositorInterface)
  {
        $this->ProductRepositorInterface = $ProductRepositorInterface;

}

public function index()
{
    $data = $this->ProductRepositorInterface->getAllProducts();

    return ApiResponsClass::sendResponse(ProductResource::collection($data),'',200);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
