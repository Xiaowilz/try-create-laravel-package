<?php


namespace Turbin\Pse\Entities;


interface ProductEntity
{
    public function getName(): string;
    public function setName(string $name): self;
    public function getCategory(): string;
    public function setCategory(string $category): self;
    public function getPrice(): float;
    public function setPrice(float $price): self;
    public function getBrand(): string;
    public function setBrand(string $brand): self;
}
