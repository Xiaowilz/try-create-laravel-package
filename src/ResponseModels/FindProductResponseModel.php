<?php


namespace Turbin\Pse\ResponseModels;


use Turbin\Pse\Entities\ProductEntity;

class FindProductResponseModel
{
    public string $name;
    public string $category;
    public float $price;
    public string $brand;

    public function __construct(private ProductEntity $productEntity)
    {
        $this->name = $this->productEntity->getName();
        $this->category = $this->productEntity->getCategory();
        $this->price = $this->productEntity->getPrice();
        $this->brand = $this->productEntity->getBrand();
    }
}
