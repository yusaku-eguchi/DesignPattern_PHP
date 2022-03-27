<?php

abstract class Factory
{

    /**
     * @param string $owner
     * @return Product
     */
    public final function create(string $owner): Product
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    /**
     * @param string $owner
     * @return Product
     */
    protected abstract function createProduct(string $owner): Product;
    
    /**
     * @param Product
     */
    protected abstract function registerProduct(Product $product): void;
}