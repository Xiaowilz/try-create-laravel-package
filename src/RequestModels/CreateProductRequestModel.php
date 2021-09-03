<?php


namespace Turbin\Pse\RequestModels;


class CreateProductRequestModel
{
    public function __construct(
        private array $attribute
    ){}

    public function getName(): string {
        return $this->attribute['name'] ?? '';
    }

    public function getCategory(): string {
        return $this->attribute['category'] ?? '';
    }

    public function getPrice(): float {
        return $this->attribute['price'] ?? 0;
    }

    public function getBrand(): string {
        return $this->attribute['brand'] ?? '';
    }
}
