<?php

namespace Turbin\Pse\Services;

use Turbin\Pse\RequestModels\CreateProductRequestModel;
use Turbin\Pse\RequestModels\UpdateProductRequestModel;
use Turbin\Pse\ResponseModels\CreateProductResponseModel;
use Turbin\Pse\ResponseModels\FindProductResponseModel;

interface ProductService
{
    public function index(): array; //array of FindAllProductResponseModel

    public function store(CreateProductRequestModel $createProductRequestModel): CreateProductResponseModel;

    public function show(int $id): FindProductResponseModel;

    public function update(UpdateProductRequestModel $updateProductRequestModel, int $id): bool;

    public function delete(int $id): bool;
}
