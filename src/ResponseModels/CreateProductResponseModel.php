<?php


namespace Turbin\Pse\ResponseModels;


use Turbin\Pse\Entities\ProductEntity;

class CreateProductResponseModel
{
    public string $name;
    public string $category;
    public float $price;

    public function __construct(ProductEntity $productEntity)
    {
        $this->name = $productEntity->getName();
        $this->category = $productEntity->getCategory();
        $this->price = $productEntity->getPrice();
    }

}
