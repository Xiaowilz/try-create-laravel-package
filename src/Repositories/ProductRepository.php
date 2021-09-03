<?php


namespace Turbin\Pse\Repositories;


use Turbin\Pse\Entities\ProductEntity;
use Turbin\Pse\RequestModels\CreateProductRequestModel;
use Turbin\Pse\RequestModels\UpdateProductRequestModel;

interface ProductRepository
{
    public function findAllProducts(): array;

    public function findById(int $id): ProductEntity;

    public function createProduct(CreateProductRequestModel $createProductRequestModel): ProductEntity;

    public function updateProduct(UpdateProductRequestModel $updateProductRequestModel, int $id): bool;

    public function deleteById(int $id): bool;
}
