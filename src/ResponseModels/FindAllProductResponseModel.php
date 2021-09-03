<?php


namespace Turbin\Pse\ResponseModels;


use Turbin\Pse\Entities\ProductEntity;

class FindAllProductResponseModel
{
    public string $name;
    public string $category;
    public string $price;

    public function __construct(private array $product)
    {
        $this->name = $this->product['name'];
        $this->category = $this->product['category'];
        $this->price = $this->product['price'];
    }
}
