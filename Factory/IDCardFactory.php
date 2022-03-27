<?php

require('IDCard.php');
require('Factory.php');

class IDCardFactory extends Factory
{
    /** @var int */
    private int $id = 0;
    /** @var string[] */
    private array $owners = [];

    protected function createProduct(string $owner): Product
    {
        $this->id++;
        return new IDCard($owner, $this->id);
    }

    /**
     * @param Product
     */
    protected function registerProduct(Product $product): void
    {
        /** @var IDCard */
        $idCard = $product;
        array_push($this->owners, $idCard->getOwner());
    }

    /**
     * @return string[] $owners
     */
    public function getOwners(): array
    {
        return $this->owners;
    }
}