<?php
namespace App\Repositories;
use App\Models\Products;

class ProductsRepository extends Repository {

    public function __construct(Products $products){
        $this->model = $products;
    }
}

?>