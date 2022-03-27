<?php

require('Product.php');

class IDCard extends Product
{
    /** @var string */
    private string $owner;
    /** @var int */
    private int $id;

    /**
     * @param string $owner
     * @param int $id
     * @return void
     */
    public function __construct(string $owner, int $id) {
        echo 'id: ' . $id . ' ' . $owner . 'のカードを作ります。';
        echo "\n";
        $this->owner = $owner;
        $this->id = $id;
    }

    /**
     * @return void
     */
    public function use(): void
    {
        echo 'id: ' . $this->id . ' ' . $this->owner . 'のカードを使います。';
        echo "\n";
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }
}