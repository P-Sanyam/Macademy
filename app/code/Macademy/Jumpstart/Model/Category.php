<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

class Product
{
    private Category $category;

    function __construct()
    {
        $this->category = new Category();
    }

    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
