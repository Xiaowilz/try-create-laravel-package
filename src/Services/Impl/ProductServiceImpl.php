<?php

namespace Turbin\Pse\Services\Impl;


use Turbin\Pse\Repositories\ProductRepository;
use Turbin\Pse\RequestModels\CreateProductRequestModel;
use Turbin\Pse\RequestModels\UpdateProductRequestModel;
use Turbin\Pse\Resources\Database;
use Turbin\Pse\ResponseModels\CreateProductResponseModel;
use Turbin\Pse\ResponseModels\FindAllProductResponseModel;
use Turbin\Pse\ResponseModels\FindProductResponseModel;
use Turbin\Pse\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    public function __construct(private ProductRepository $productRepository)
    {
    }

    public function index(): array
    {
        try {
            $responseProducts = [];
            $products = $this->productRepository->findAllProducts();

            foreach ($products as $product) {
                $responseProductModel = new FindAllProductResponseModel($product);
                array_push($responseProducts, $responseProductModel);
            }

            return $responseProducts;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function store(CreateProductRequestModel $createProductRequestModel): CreateProductResponseModel
    {
        try {
            Database::beginTransaction();

            $product = $this->productRepository->createProduct($createProductRequestModel);

            Database::commit();

            return new CreateProductResponseModel($product);
        } catch (\Exception $exception) {
            Database::rollBack();
            throw $exception;
        }
    }

    public function show(int $id): FindProductResponseModel {
        try {
            $product = $this->productRepository->findById($id);

            return new FindProductResponseModel($product);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function update(UpdateProductRequestModel $updateProductRequestModel, int $id): bool
    {
        try{
            Database::beginTransaction();

            $isUpdated = $this->productRepository->updateProduct($updateProductRequestModel, $id);

            Database::commit();

            return $isUpdated;
        } catch (\Exception $exception) {
            Database::rollBack();
            throw $exception;
        }
    }

    public function delete(int $id): bool
    {
        try {
            Database::beginTransaction();

            $isDeleted = $this->productRepository->deleteById($id);

            Database::commit();

            return $isDeleted;
        } catch (\Exception $exception) {
            Database::rollBack();
            throw $exception;
        }
    }
}
