<?php

namespace Turbin\Pse;

class Product
{
    public function __construct(private string $name) {
    }

    public function getName(): string {
        return "This product name is {$this->name}";
    }
}